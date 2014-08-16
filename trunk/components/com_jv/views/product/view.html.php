<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 */
class JvViewProduct extends JViewLegacy
{
	// Overwriting JView display method
	
	
	function display($tpl = null)
	{
	
		$id	 	    = JRequest::getInt("id");
		
		if($id){
		
			$product = JvHelper::getProduct($id);
			$this->assignRef('product', $product);
			parent::display($tpl);
		}
		else {
			
			$app =& JFactory::getApplication();
			$app->redirect('index.php?option=com_jv&view=products&Itemid=108');
			
		}
		
	}
	
	
	
}