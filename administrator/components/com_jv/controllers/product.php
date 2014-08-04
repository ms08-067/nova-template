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
		
		JRequest::setVar( 'view'  , 'product');
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		parent::__construct($config);
	}
	
	public function display($cachable = false, $urlparams = false) {		
		
		$post = JRequest::get('post');
		if(count($post)){ 
		
			$model = $this->getModel("Product");
			$post['created_date'] = date("Y-m-d H:i:s");;
			
			$id = $model->store($post,"product");
			var_dump($id);
			//echo "<pre>";print_r($post); 
		}
		parent::display();
	
	}
	public function cancel(){
	
		echo "cancel";exit;
	}
	function apply(){
		
		echo 123;exit;
	}
	public function save(){
		
		echo "Save";exit;
	}
	public function test(){
		echo 1;exit;
	}
	public function add(){
		echo 123;exit;
	}

}
