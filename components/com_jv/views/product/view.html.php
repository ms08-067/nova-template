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
	
		$this->msg = $this->get('Msg');
		parent::display($tpl);
	}
	
	
	
}