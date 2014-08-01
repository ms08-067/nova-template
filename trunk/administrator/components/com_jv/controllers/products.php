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
		
		JRequest::setVar( 'view'  , 'products');
		parent::__construct($config);
	}
	
	function save(){
		
		echo 123;exit;
	}
	
	public function display($cachable = false, $urlparams = false) {		
		
		parent::display();
	
	}
	
	public function  add() {
	
		//JRequest::setVar( 'layout', 'edit'  );
		JRequest::setVar( 'view'  , 'product');
		parent::display();
	}
	public  function  cannel() {
	
		echo 123;exit;
	}
	/**
	 * Proxy for getModel.
	 *
	 * @param   string	$name	The name of the model.
	 * @param   string	$prefix	The prefix for the PHP class name.
	 *
	 * @return  JModel
	 * @since   1.6
	 */
	
	public function getModel($name = 'product', $prefix = 'ContentModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}


}
