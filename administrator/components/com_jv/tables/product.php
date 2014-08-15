<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 */
class JvTableProduct extends JTable
{

	var $id ;
	var $img_thumb ;
	var $img_thumb_alt ;
	var $img ;
	var $img_alt ;
	var $name_project ;
	var $short_des ;
	var $des ;
	var $publish ;
	var $created_date ;
	var $count_buy;
	var $price ;
	var $id_categories_product ;
	public function __construct(&$db)
	{
		parent::__construct('#__jv_product', 'id', $db);
	}
}