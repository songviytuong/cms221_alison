<?php
#-------------------------------------------------------------------------
# LISE - List It Special Edition
# Version 1.2.2
# A fork of ListI2
# maintained by Fernando Morgado AKA Jo Morg
# since 2015
#-------------------------------------------------------------------------
#
# Original Author: Ben Malen, <ben@conceptfactory.com.au>
# Co-Maintainer: Simon Radford, <simon@conceptfactory.com.au>
# Web: www.conceptfactory.com.au
#
#-------------------------------------------------------------------------
#
# Maintainer since 2011 up to 2014: Jonathan Schmid, <hi@jonathanschmid.de>
# Web: www.jonathanschmid.de
#
#-------------------------------------------------------------------------
#
# Some wackos started destroying stuff since 2012 and stopped at 2014:
#
# Tapio Löytty, <tapsa@orange-media.fi>
# Web: www.orange-media.fi
#
# Goran Ilic, <uniqu3e@gmail.com>
# Web: www.ich-mach-das.at
#
#-------------------------------------------------------------------------
#
# LISE is a CMS Made Simple module that enables the web developer to create
# multiple lists throughout a site. It can be duplicated and given friendly
# names for easier client maintenance.
#
#-------------------------------------------------------------------------
# BEGIN_LICENSE
#-------------------------------------------------------------------------
# This file is part of LISE
# LISE program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# LISE program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
# END_LICENSE
#-------------------------------------------------------------------------

if( !defined('CMS_VERSION') ) exit;


#---------------------
# Check params
#---------------------

if (!$this->CheckPermission($this->_GetModuleAlias() . '_modify_option')) {

	return;
}

if (isset($params['cancel'])) {

	$params = array('active_tab' => 'templatetab');
	$this->Redirect($id, 'defaultadmin', $returnid, $params);
}

if (isset($params['type'])) {

	$tpl_type = $params['type'];
	$tpl_content = $this->ModGetTemplateFromFile('fe_' . $tpl_type . '_default');
	$tpl_name = '';

} elseif(isset($params['name'])) {

	list($tpl_type, $tpl_name) = explode('_', $params['name'], 2);
	$tpl_content = $this->GetTemplate($params['name']);
	$params['orig_name'] = $params['name'];

} else {

	die('Cant happend');
}

if(isset($params['template_name'])) {

	$tpl_name = $params['template_name'];
}

if(isset($params['template_text'])) {

	$tpl_content = $params['template_text'];
}

#---------------------
# Submit
#---------------------

if (isset($params['submit']) || isset($params['apply'])) {

	$errors = array();
	
	if (empty($tpl_name)) {
	
		$errors[] = $this->ModLang('template_name_empty');
	}
	
	if (empty($tpl_content)) {
	
		$errors[] = $this->ModLang('template_content_empty');
	}
	
	if (empty($errors)) {
	
		if(isset($params['orig_name'])) {
		
			$this->DeleteTemplate($params['orig_name']);
			list($orig_tpl_type, $orig_tpl_name) = explode('_', $params['orig_name'], 2);
			
			$tpl_default = $this->GetPreference($this->_GetModuleAlias() . '_default_'.$tpl_type.'_template');
			if($tpl_default == $orig_tpl_name) {
			
				$this->SetPreference($this->_GetModuleAlias() . '_default_'.$tpl_type.'_template', $tpl_name);
			}			
		}
		
		$this->SetTemplate($tpl_type.'_'.$tpl_name, $tpl_content);
	
		if (!isset($params['apply'])) {
		
			$params = array('message' => 'changessaved','active_tab' => 'templatetab');
			$this->Redirect($id, 'defaultadmin', '', $params);
            
		} elseif (isset($params['apply']) && isset($params['ajax'])) {
		    $response = '<EditItem>';
		    $response .= '<Response>Success</Response>';
		    $response .= '<Details><![CDATA[' . $this->ModLang('changessaved') . ']]></Details>';
		    $response .= '</EditItem>';
		    echo $response;
		    return;
        } else {
            echo $this->ShowMessage($this->ModLang('changessaved'));
		}
	}
}

#---------------------
# Smarty processing
#---------------------

// display errors if there are any
if (!empty($errors)) {
    if (isset($params['apply']) && isset($params['ajax'])) {
        $response = '<EditItem>';
        $response .= '<Response>Error</Response>';
        $response .= '<Details><![CDATA[';
        foreach ($errors as $error) {
            $response .= '<li>' . $error . '</li>';
        }
        $response .= ']]></Details>';
        $response .= '</EditItem>';
        echo $response;
        return;
    } else {
        echo $this->ShowErrors($errors);
    }
}

$smarty->assign('backlink', $this->CreateBackLink('templatetab'));
$smarty->assign('title', (isset($params['name']) ? $this->ModLang('edittemplate') : $this->ModLang('add', $this->ModLang($tpl_type.'template'))));
$smarty->assign('startform', $this->CreateFormStart ($id, 'admin_edittemplate', $returnid, 'post', 'multipart/form-data', false, '', $params));
$smarty->assign('endform', $this->CreateFormEnd());
$smarty->assign('input_template', $this->CreateSyntaxArea($id, $tpl_content, 'template_text'));
$smarty->assign('input_name', $this->CreateInputText($id, 'template_name', $tpl_name, 40));

$templatelist = $this->GetFileTemplatesByType($tpl_type);
$smarty->assign('input_tpl_list', $this->CreateInputDropdown($id, 'template_fromfile', $templatelist));

$smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
$smarty->assign('apply', $this->CreateInputSubmit($id, 'apply', lang('apply')));
$smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));

echo $this->ModProcessTemplate('edittemplate.tpl');

?>