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
 * products list controller class.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 * @since       1.6
 */
class JvControllerProducts extends JControllerLegacy
{
	
	
	//protected $view;
	function __construct($config = array())
	{
		
		$view = JRequest::getVar("view");
		
		switch($view){
			case 'categories':
				JRequest::setVar( 'view'  , 'categories');
				break;
			default:
				JRequest::setVar( 'view'  , 'products');
				break;
		}
		
		parent::__construct($config);
		
	}
	
	public function display($cachable = false, $urlparams = false) {		
		parent::display();
	
	}
	
	public function  add() {
	
		$this->setRedirect( 'index.php?option=com_jv&controller=product');
	}
	
	public function getModel($name = 'product', $prefix = 'JvModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}


}
