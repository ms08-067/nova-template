<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');
class JvViewTemp extends JViewLegacy
{
	
	public $layout;
	
	function __construct( $default = array()){
	
		$this->layout = JRequest::getVar('layout');
		//var_dump(JRequest::getVar('layout')) ;exit;
		//echo $this->getLayout();exit;
		parent::__construct( $default );
	}
	
	function display($tpl = null)
	{
		
		if($this->layout != "") $fnc = 'display'.ucfirst($this->layout);
		else $fnc = "displayDefault";
		$this->$fnc($tpl);		
	}
	
	public  function displayDefault($tpl = null){
	
		
		$bar = JToolBar::getInstance('toolbar');
		JToolBarHelper::title(JText::_('COM_JV_TEMP'), 'logo.png');
		//JToolBarHelper::addNew('articles.add');
		
		JToolbarHelper::addNew('add');
		JToolbarHelper::publish('articles.publish', 'JTOOLBAR_PUBLISH', true);
		JToolbarHelper::unpublish('articles.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::deleteList('', 'remove', 'Delete');
		
		parent::display($tpl);
	}
	
	public  function displayEdit($tpl = null){
		JToolBarHelper::title(JText::_('JV Temp : Add new temp'), 'logo.png');
		JToolbarHelper::apply('apply');
		JToolbarHelper::save('save');
		JToolbarHelper::cancel('cancel', 'JTOOLBAR_CLOSE');
		
		parent::display($tpl);
	}
	
	

	
	
}