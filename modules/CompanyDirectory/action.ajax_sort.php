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
if (!isset($gCms)) exit;
if (!$this->CheckPermission('Modify Company Directory')) exit;
if( $_SERVER['REQUEST_METHOD'] != 'POST' ) exit;
if( !isset($params['compid']) || !isset($params['fdid']) || !isset($params['order']) ) exit;

$config = cmsms()->GetConfig();
$compid = (int)$params['compid'];
$fdid = (int)$params['fdid'];
$order = $params['order'];
if( !is_array($order) || !count($order) ) return;

$the_company = cd_company::load_by_id($compid);
if( is_object($the_company) ) {
  $field = $the_company->get_field($fdid);
  if( is_object($field) && $field->type == 'album' ) {
    if( $field->value ) {
      $files = unserialize($field->value);
      if( is_array($files) && count($files) == count($order) ) {
	$newfiles = array();
	foreach( $order as $one ) {
	  $newfiles[] = $files[$one];
	}
	$the_company->set_field($fdid,serialize($newfiles));
	$the_company->save();
	audit($compid,$this->GetName(),'Sorted files in album '.$fdid);
      }
    }
  }
}

#
# EOF
#
?>