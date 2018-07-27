<?php  /* -*- Mode: PHP; tab-width: 4; c-basic-offset: 2 -*- */
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CompanyDirectory (c) 2004-6 by Ted Kulp (ted@cmsmadesimple.org)
#   Copyright 2006 - 2014 by Robert Campbell (calguy1000@cmsmadesimple.org)
#
#  An addon module for CMS Made Simple to allow management of and various ways to display
#  company information for use in directories etc.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005-2010 by Ted Kulp (wishy@cmsmadesimple.org)
# Visit the CMSMS homepage at: http://www.cmsmadesimple.org
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

//
// Initialization
//
$thetemplate = 'frontendlist_'.$this->GetPreference(COMPANYDIR_PREF_DFLTFRONTENDLIST_TEMPLATE);
if( isset($params['frontendlisttemplate'] ) ) $thetemplate = 'frontendlist_'.$params['frontendlisttemplate'];
$feu = $this->GetModuleInstance('FrontEndUsers');
if( !is_object($feu) ) return; // no feu module.
$max_records = $this->GetPreference('frontend_numrecords',0);
if( $max_records < 1 ) $max_records = 100000;
$feu_uid = $feu->LoggedInId();
if( $feu_uid <= 0 ) return; // not logged in

//
// Get data
//
$tmp = cd_utils::get_fielddefs(false,true);
$have_album = null;
if( is_array($tmp) && count($tmp) ) {
  foreach( $tmp as $one ) {
	if( $one['type'] == 'album' ) {
	  // we have a public album.
	  $have_album = $one['id'];
	  break;
	}
  }
}

$query = 'SELECT * FROM '.cms_db_prefix().'module_compdir_companies WHERE owner_id = ? ORDER BY modified_date LIMIT '.$max_records;
$data = $db->GetArray($query,array($feu_uid));
$num_listings = 0;
if( is_array($data) ) $num_listings = count($data);

//
// Give data to smarty
//
$smarty->clear_assign('records');
if( $num_listings > 0 ) {
  for( $i = 0; $i < count($data); $i++ ) {
	$rec =& $data[$i];
	$parms = array();
	$parms['companyid'] = $rec['id'];
	$rec['edit_url'] = $this->CreateURL($id,'fe_edit2',$returnid,$parms);

	if( $this->GetPreference('frontend_delete',1) ) $rec['delete_url'] = $this->CreateURL($id,'fe_delete',$returnid,$parms);

	$parms['cd_fldid'] = $have_album;
	$rec['gallery_url'] = $this->CreateURL($id,'fe_edit_album',$returnid,$parms);
  }
  $smarty->assign('records',$data);
}

if( $this->GetPreference('frontend_create',0) && ($num_listings < $max_records) ) {
  $smarty->assign('fe_add_url',$this->CreateURL($id,'fe_edit2',$returnid));
  if( $this->GetPreference('frontend_import',0) ) $smarty->assign('fe_import_url',$this->CreateURL($id,'fe_importcsv',$returnid));
}
$smarty->assign('frontend_delete',$this->GetPreference('frontend_delete',1));

//
// Process the template.
//
$smarty->assign('have_album',$have_album);
echo $this->ProcessTemplateFromDatabase($thetemplate);

# EOF
#
?>