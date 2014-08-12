<?php
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.helper');
class JvHelper
{
	public function getCountProductByIdCategory($id=0){
		
		$db = JFactory::getDbo();
		$sql = "SELECT count(*) as total FROM #__jv_product WHERE id_categories_product=".$id;
		$db->setQuery($sql);
		return $db->loadObject();
	}
	
	public function getProduct($id){
		
		$db = JFactory::getDbo();
		$sql = "SELECT * FROM #__jv_product WHERE id = ".$id;
		$db->setQuery($sql);
		return $db->loadObject();
	}
	
	
}