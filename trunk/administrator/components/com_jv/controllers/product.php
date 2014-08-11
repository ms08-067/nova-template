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
		
		parent::display();
	}
	public function cancel(){
	
		$this->setRedirect( 'index.php?option=com_jv&controller=products');
	}//End function cancel
	
	public function save(){
	
		$post = JRequest::get('post');
		$id = "";
		
		if(count($post)){
			$model = $this->getModel("Product");
			$post['created_date'] = date("Y-m-d H:i:s");
			$post['name_project'] = $post['jform']['name_project'];
			$post['short_des'] = $post['jform']['short_des'];
			$post['des'] = $post['jform']['des'];
			$post['price'] = $post['jform']['price'];
			$post['img_thumb'] = $post['jform']['img_thumb'];
			$post['img_thumb_alt'] = $post['jform']['img_thumb_alt'];
			$post['img'] = $post['jform']['img'];
			$post['img_alt'] = $post['jform']['img_alt'];
			//echo "<pre>";print_r($post);
			$id = $model->store($post,"product");
			//var_dump($id);
			
		}
		switch($this->getTask()){
			case 'apply':
				if(!empty($id)){
					$this->setRedirect( 'index.php?option=com_jv&controller=product',"Save Successful ID ".$id);
				}
				else {
					$this->setRedirect( 'index.php?option=com_jv&controller=product',"Save Error ");
				}
				break;
			default:
				if(!empty($id)){
					$this->setRedirect( 'index.php?option=com_jv&controller=products',"Save Successful ID ".$id);
				}
				else {
					$this->setRedirect( 'index.php?option=com_jv&controller=products',"Save Error ");
				}
				break;
		}
		
		
	}//End function Save

}
