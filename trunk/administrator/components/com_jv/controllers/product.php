<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 *
 */

defined('_JEXEC') or die;

class JvControllerProduct extends JControllerForm
{
	
	public function __construct($config = array())
	{
		echo "<pre>";print_r($_POST);exit;
		JRequest::setVar( 'view'  , 'product');
		parent::__construct($config);
	}
	public function display($cachable = false, $urlparams = false) {		
		
		parent::display();
	
	}
	
	public function save(){
	
		echo "Save";exit;
	}
	public function test(){
		echo 1;exit;
	}
	public function add(){
		echo 123;ext;
	}

}
