<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGEcommerceBase (c) 2010 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide a base communications
#  layer and common preference repository for his ecommerce suite of
#  modules for CMSMS.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
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

interface cgecomm_cart_module
{
  public function EraseCart();

  public function &GetBasketItems($name,$feu_uid = -1);

  public function GetBasketDetails($name,$feu_uid = -1);

  public function GetBasketNames($feu_uid='');

  public function GetNumBaskets();

  public function GetNumItems();

  public function GetTotal();

  public function GetTotalWeight();

  public function AddCartItem(cg_ecomm_cartitem &$obj,$basket_name = '');

  // public function &GetItems();

  //public function SetItems($items);

  public function IsCartModule();

  public function SupportsShippingInfo();

  public function get_addtocart_form($params);
}

#
# EOF
#
?>