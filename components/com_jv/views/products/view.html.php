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
		$this->assignRef('products', $products->getData());
		
		$this->msg = $this->get('Msg');
		parent::display($tpl);
	}
	
	
	
}