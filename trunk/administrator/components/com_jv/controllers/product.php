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
		if(count($post)){
			$model = $this->getModel("Product");
			$post['created_date'] = date("Y-m-d H:i:s");
			$post['name_project'] = $post['jform']['name_project'];
			$post['short_des'] = $post['jform']['short_des'];
			$post['des'] = $post['jform']['des'];
			$post['notice'] = $post['jform']['notice'];
			$post['price'] = $post['jform']['price'];
			$post['version'] = $post['jform']['version'];
			$post['img_thumb'] = $post['jform']['img_thumb'];
			$post['img_thumb_alt'] = $post['jform']['img_thumb_alt'];
			$post['img'] = $post['jform']['img'];
			$post['img_alt'] = $post['jform']['img_alt'];
			
			if($post["id"]){
				$db = JFactory::getDbo();
				$obj = new stdClass();
				$obj->id = $post["id"];
				$obj->img_thumb = $post["img_thumb"];
				$obj->img_thumb_alt = $post["img_thumb_alt"];
				$obj->img = $post["img"];
				$obj->img_alt = $post["img_alt"];
				$obj->short_des = $post["short_des"];
				$obj->des = $post["des"];
				$obj->notice = $post["notice"];
				$obj->publish = $post["publish"];
				$obj->created_date = $post["created_date"];
				$obj->price = $post["price"];
				$obj->version = $post["version"];
				$obj->id_categories_product = $post["id_categories_product"];
				
				$db->updateObject('#__jv_product', $obj,'id');
			}
			else {
				$id = $model->store($post,"product");
			}
		}
		switch($this->getTask()){
			case 'apply':
				if($post['id']){
					$this->setRedirect( "index.php?option=com_jv&controller=product&id=".$post['id'],"Save Successful ID ".$id);
				}
				else {
					if($id){
						
						$this->setRedirect( "index.php?option=com_jv&controller=product&id=".$id,"Save Successful ID ".$id);
					}
					else {
						$this->setRedirect( "index.php?option=com_jv&controller=product&id=".$id,"Save Error ");
					}
				}
				break;
			default:
				if($post['id']){
					
					$this->setRedirect( "index.php?option=com_jv&controller=products","Save Successful ID ".$id);
				}
				else {
					if($id){
						$this->setRedirect( 'index.php?option=com_jv&controller=products',"Save Successful ID ".$id);
					}
					else {
						$this->setRedirect( 'index.php?option=com_jv&controller=products',"Save Error ");
					}
				}
				break;
		}
		
		
	}//End function Save

}
