<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: Products (c) 2008-2014 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to allow users to create, manage
#  and display products in a variety of ways.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# Visit the CMSMS Homepage at: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
#END_LICENSE
if (!isset($gCms)) exit;
if (!$this->CheckPermission('Modify Products')) return;
$this->SetCurrentTab('products');

//
// A utility function
//
function get_field_def(&$fielddefs,$id)
{
    foreach( $fielddefs as $onedef ) {
        if( $onedef->id == $id ) {
            return $onedef;
        }
    }
    return false;
}

if (isset($params['cancel'])) $this->RedirectToTab($id);

$product = new \Products\Product();
$userid = get_userid();
$fielddefs = product_utils::get_fielddefs(true);

if (isset($params['submit'])) {
    $errors = []; // outside of try/catch

    try {
        $have_uploaded_files = [];
        $product->set_name(\cge_param::get_string($params,'product_name'));
        $product->set_price(\cge_param::get_float($params,'price'));
        $product->set_weight(\cge_param::get_float($params,'weight'));
        $product->set_sku(\cge_param::get_string($params,'sku'));
        $product->set_alias(\cge_param::get_string($params,'alias'));
        $product->set_details(\cge_param::get_html($params,'details'));
        $product->set_status(\cge_param::get_string($params,'status',$this->GetPreference('default_status',$product::STATUS_PUBLISHED)));
        $product->set_taxable(\cge_param::get_bool($params,'taxable',$this->GetPreference('default_taxable',1)));
        $product->set_url(\cge_param::get_string($params,'urlslug'));
        $product->set_owner(\cge_param::get_int($params,'owner'));
        $hier = \cge_param::get_int($params,'hierarchy');
        if( $hier ) $hier = [ $hier ];
        $product->set_hierarchies( $hier );
        $product->set_categories( \cge_utils::get_param( $params, 'categories' ) );

        $field_vals = [];
        if (isset($_REQUEST[$id.'customfield'])) {
            // Handle custom fields
            foreach ($_REQUEST[$id.'customfield'] as $k=>$v) {
                if (startswith($k, 'field-')) {
                    // get the field index
                    $fid = (int) substr($k, 6);

                    // get the field type
                    $def = get_field_def($fielddefs,$fid);
                    if( !$def ) {
                        die('could not get field def for '.$fid);
                        continue;
                    }

                    // handle the upload (if any)
                    switch( $def->type ) {
                    case 'file':
                    case 'image':
                        $handler = new \cg_fileupload($id);
                        $res = $handler->check_upload('customfield','field-'.$fid,FALSE);
                        $err = $handler->get_error();
                        if( !$res && $err != cg_fileupload::NOFILE ) {
                            $errors[] = sprintf("%s %s: %s",$this->Lang('field'),$def->name,$this->GetUploadErrorMessage($err));
                        } else if( !$err ) {
                            $have_uploaded_files[] = $fid;
                            $v = $handler->get_uploaded_filename('customfield','field-'.$fid);
                        }
                        break;

                    case 'quantity':
                        $v = (int)$v;
                        $v = max(0,$v);
                        break;

                    case 'subscription':
                        if( is_array($v) ) $v = serialize($v);
                        break;

                    case 'dimensions':
                        // nothing.. utilize the array.
                        break;

                    case 'companydir':
                        $v = (int)$v;
                        if( $v < 1 ) $v = null;
                        break;

                    case 'textbox':
                    case 'checkbox':
                    case 'textarea':
                    case 'dropdown':
                        break;

                    default:
                        throw new \LogicException("{$def->type} is an unknown field type");
                    }

                    // commit it.
                    if( !is_null($v) && $v !== '' ) $product->set_field( $fid, $v );
                }
            }
        }

        // save the thing.
        $product = $this->GetProductStorage()->save( $product );
        // now move files to final location.
        if( count($have_uploaded_files) ) {
            $modified = false;
            foreach( $have_uploaded_files as $field_id ) {
                $destdir = \product_utils::get_product_upload_path( $product->id );
                \cge_dir::mkdirr( $destdir );
                $handler = new \cg_fileupload($id,$destdir);
                $res = $handler->handle_upload( 'customfield', '', 'field-'.$field_id );
                $err = $handler->get_error();
                if( !$res && $err != $handler::NOFILE ) {
                    $errors[] = sprintf("%s %s: %s",$this->Lang('field'),$def->name,$this->GetUploadErrorMessage($err));
                    debug_display($errors);
                    die('should not happen');
                    $product->set_field_value( $field_id, null );
                    $modified = true;
                }
            }
            if( $modified ) $product = $this->GetProductStorage()->save( $product );
        }

        $module = cms_utils::get_search_module();
        if ($module != FALSE) {
            if( $status == 'published' ) {
                $module->AddWords($this->GetName(), $cid, 'product', implode(' ', $this->GetSearchableText($cid) ));
            }
        }

        if( count($errors) ) throw new \RuntimeException($this->Lang('info_fieldproblems'));

        // all done
        $this->RedirectToTab($id);
    }
    catch( \Exception $e ) {
        // handle errors.
        if( count($errors) ) echo $this->ShowErrors($errors);
        echo $this->ShowErrors($e->GetMessage());
    }
}

$fieldarray = array();
if (count($fielddefs) > 0) {
    $subscribe_opts = array();
    $subscribe_opts[-1] = $this->Lang('none');
    $subscribe_opts['monthly'] = $this->Lang('subscr_monthly');
    $subscribe_opts['quarterly'] = $this->Lang('subscr_quarterly');
    $subscribe_opts['semianually'] = $this->Lang('subscr_semianually');
    $subscribe_opts['yearly'] = $this->Lang('subscr_yearly');
    $subscribe_opts = array_flip($subscribe_opts);

    $expire_opts = array();
    $expire_opts[$this->Lang('none')] = -1;
    $expire_opts[$this->Lang('expire_six_months')] = '6';
    $expire_opts[$this->Lang('expire_one_year')] = '12';
    $expire_opts[$this->Lang('expire_two_year')] = '24';

    foreach ($fielddefs as $fielddef) {
        $field = new stdClass();

        $value = $product->get_field_value( $fielddef->id );
        $field->id = $fielddef->id;
        $field->name = $fielddef->name;
        $field->prompt = $fielddef->prompt;
        $field->type = $fielddef->type;
        switch ($fielddef->type) {
        case 'dimensions':
            $field->prompt .= '&nbsp;('.product_ops::get_length_units().')';
            $field->input_box =
                $this->Lang('abbr_length').':&nbsp'.$this->CreateInputText($id,'customfield[field-'.$fielddef->id.'][length]',$value,3,3).product_ops::get_length_units().'&nbsp'.
                $this->Lang('abbr_width').':&nbsp'.$this->CreateInputText($id,'customfield[field-'.$fielddef->id.'][width]', $value,3,3).product_ops::get_length_units().'&nbsp'.
                $this->Lang('abbr_height').':&nbsp'.$this->CreateInputText($id,'customfield[field-'.$fielddef->id.'][height]', $value,3,3).product_ops::get_length_units().'&nbsp';
            break;
        case 'checkbox':
            $field->input_box = '<input type="hidden" name="' . $id . 'customfield[field-'.$fielddef->id.']' . '" value="false" />'.$this->CreateInputCheckbox($id, 'customfield[field-'.$fielddef->id.']', 'true', $value == 'true');
            break;
        case 'textarea':
            $field->input_box = $this->CreateTextArea(true, $id, $value, 'customfield[field-'.$fielddef->id.']');
            break;
        case 'dropdown':
            $field->input_box = $this->CreateInputDropdown($id, 'customfield[field-'.$fielddef->id.']', $fielddef->options, -1, $value );
            $field->options = array_flip($fielddef->options);
            break;
        case 'file':
            $field->input_box = $this->CreateFileUploadInput($id,'customfield[field-'.$fielddef->id.']','',50);
            $field->hidden = $this->CreateInputHidden($id,'customfield[field-'.$fielddef->id.']','');
        case 'image':
            $field->input_box = $this->CreateFileUploadInput($id,'customfield[field-'.$fielddef->id.']','',50);
            $field->hidden = $this->CreateInputHidden($id,'customfield[field-'.$fielddef->id.']','');
            break;
        case 'subscription':
            $field->input_box = $this->Lang('subscr_payperiod').':&nbsp;';
            $field->input_box .= $this->CreateInputDropdown($id,'customfield[field-'.$fielddef->id.'][payperiod]',
                                                            $subscribe_opts, -1, $value);
            $field->input_box .= '<br/>'.$this->Lang('subscr_delperiod').':&nbsp;';
            $field->input_box .= $this->CreateInputDropdown($id,'customfield[field-'.$fielddef->id.'][delperiod]',
                                                            $subscribe_opts, -1, $value);
            $field->input_box .= '<br/>'.$this->Lang('subscr_expiry').':&nbsp;';
            $field->input_box .= $this->CreateInputDropdown($id,'customfield[field-'.$fielddef->id.'][expire]',
                                                            $expire_opts, -1, $value);
            break;

        case 'quantity':
            $field->input_box = $this->CreateInputText($id, 'customfield[field-'.$fielddef->id.']', $value, 4, 4);
            break;

        case 'companydir':
            $cdmod = cms_utils::get_module('CompanyDirectory','1.19');
            if( $cdmod ) {
                $field->input_box = $this->CreateInputText($id,'customfield[field-'.$fielddef->id.']',$value,10,10,
                                                           "placeholder=\"{$this->Lang('cd_autocomplete')}\" title=\"{$this->Lang('title_cdautocomplete')}\"");
                $field->input_box = '<span class="cdautocomplete">'.$field->input_box.'</span>';
            }
            break;

        case 'textbox':
        default:
            $field->input_box = $this->CreateInputText($id, 'customfield[field-'.$fielddef->id.']', $value, 80, 255);
            break;
        }
        $fieldarray[] = $field;
    }
}

// Display the template
$smarty->assign('compid',$product->id);
$smarty->assign('product_name',$product->name);
$smarty->assign('price',$product->price);
$smarty->assign('weight',$product->weight);
$smarty->assign('sku',$product->sku);
$smarty->assign('currency_symbol',product_ops::get_currency_symbol());
$smarty->assign('weightunits',product_ops::get_weight_units());
$smarty->assign('lengthunits',product_ops::get_length_units());
$smarty->assign('inputalias',$this->CreateInputText($id,'alias',$product->alias,40,255));
$smarty->assign('detailstext', $this->Lang('details'));
$smarty->assign('inputdetails', $this->CreateTextArea(true, $id, $product->details, 'details', '', '', '', '', '80', '5'));
$smarty->assign('all_categories',product_utils::get_category_list());
$smarty->assign('selcatarray',array());
$smarty->assign('taxabletext',$this->Lang('taxable'));
$smarty->assign('inputtaxable', $this->CreateInputCheckbox($id,'taxable',1,$product->taxable));

$hierarchy_items = $this->BuildHierarchyList();
$smarty->assign('hierarchy_items',$hierarchy_items);
$smarty->assign('hierarchy_pos',isset($params['hierarchy'])?$params['hierarchy']:-1);

$statuses = [ $this->Lang('published')=>'published', $this->Lang('draft')=>'draft', $this->Lang('disabled')=>'disabled' ];
$smarty->assign('statustext',$this->Lang('status'));
$smarty->assign('inputstatus',$this->CreateInputDropdown($id,'status',$statuses,-1,$product->status));
$smarty->assign('hidden', '');
$smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
$smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));
$smarty->assign('customfields', $fieldarray);
$smarty->assign('customfieldscount', count($fieldarray));
$smarty->assign('urlslug',$product->url);
$smarty->assign('product',$product);

$feu_ownerlist = product_utils::get_feu_ownerlist();
$smarty->assign('feu_ownerlist',$feu_ownerlist);

echo $this->ProcessTemplate('editproduct.tpl');
