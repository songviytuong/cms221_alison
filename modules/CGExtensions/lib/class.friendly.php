<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGExtensions (c) 2008-2014 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide useful functions
#  and commonly used gui capabilities to other modules.
#
#-------------------------------------------------------------------------
# CMSMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
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

/**
 * An abstract class to simulate friend relationships in php.
 *
 * @package CGExtensions
 * @category Utilities
 * @author  calguy1000 <calguy1000@cmsmadesimple.org>
 * @copyright Copyright 2010 by Robert Campbell
 */

/**
 * An abstract class to simulate friend relationships in php.
 *
 * @package CGExtensions
 */
abstract class friendly
{
    /**
     * @ignore
     */
    private $_friends;

    /**
     * Constructor.
     *
     * This class is automatically added as a friend to itself.
     */
    protected function __construct()
    {
        $this->add_friend(get_class($this));
    }

    /**
     * Test if the current class is in the list of friend classes.
     * Throws an exception on failure.
     *
     * @return void
     */
    protected function is_friendly()
    {
        $class = 'unknown';
        if( is_array($this->_friends) ) {
            $trace = debug_backtrace();
            if( isset($trace[2]['class']) ) $class = $trace[2]['class'];
            if( $class && in_array($class,$this->_friends) ) return;
        }

        throw new \Exception('-- Access to invalid function from class ('.$class.')');
    }

    /**
     * Add a class to this classes list of friends.
     * Typically this method is called from this classes constructor.
     *
     * <code>
     * $this->add_friend('otherclass');
     * </code>
     *
     * @param string $classname The class to add as a friend.
     */
    protected function add_friend($classname)
    {
        $tmp = explode(',',$classname);
        if( !is_array($tmp) ) return;

        if( !is_array($this->_friends) ) $this->_friends = array();

        foreach( $tmp  as $one ) {
            $this->_friends[] = $one;
        }
    }
} // end of class

?>