<?php
#-------------------------------------------------------------------------
# Module: Custom Global Settings
# Author: Rolf Tjassens, Jos
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2011 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/customgs
#-------------------------------------------------------------------------
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#-------------------------------------------------------------------------

if (!isset($gCms)) exit;

/** 
 * Uninstall module
 */
$db = $this->GetDb();

// remove the database tables
$dict = NewDataDictionary( $db );
$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_customgs" );
$dict->ExecuteSQLArray($sqlarray);

// remove the permissions
$this->RemovePermission('Custom Global Settings - Use');
$this->RemovePermission('Custom Global Settings - Manage');
		
// remove all preferences
$this->RemovePreference();

// remove the event
$this->RemoveEvent('OnSettingChange');

?>