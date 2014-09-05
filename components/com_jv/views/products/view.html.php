<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 */
class JvViewProducts extends JViewLegacy
{
	// Overwriting JView display method
	function display($tpl = null)
	{
		
		$products = new JvModelProduct();
		$products->_limit = 5;
		$products->_limitstart = JRequest::getInt("limitstart");		
		
		//$limitstart = JRequest::getInt("limitstart");
		//var_dump($limitstart);
		
		$this->assignRef('products',   $products->getData($publish = 1));
		$this->assignRef('pagination', $products->getPagination($publish = 1));
		
		parent::display($tpl);
		
	}
	
}