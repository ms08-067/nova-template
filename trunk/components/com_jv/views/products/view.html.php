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
		$products->_limit = 6;
		$products->_limitstart = 0;
		$this->assignRef('products', $products->getData($publish = 1));
		
		parent::display($tpl);
	}
	
}