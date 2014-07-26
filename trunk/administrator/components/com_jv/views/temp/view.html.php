<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
//jimport('joomla.application.component.view');
class JvViewTemp extends JViewLegacy
{
	
	function __construct( $default = array()){
	
		$this->layout = JRequest::getVar('layout') ;
		parent::__construct( $default );
	}
	
	function display($tpl = null)
	{
		$this->addToolbar();
		//$this->msg = $this->get('Msg');
		parent::display($tpl);
	}
	
	protected function addToolbar()
	{
		
		$bar = JToolBar::getInstance('toolbar');
		JToolBarHelper::title(JText::_('COM_JV_TEMP'), 'logo.png');
		JToolbarHelper::addNew('article.add');		
		JToolbarHelper::publish('articles.publish', 'JTOOLBAR_PUBLISH', true);
		JToolbarHelper::unpublish('articles.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::deleteList('', 'remove', 'Delete');
	}
	
}