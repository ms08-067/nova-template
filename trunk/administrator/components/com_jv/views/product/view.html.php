<?php
/**
 * @subpackage  com_jv
 *
 */
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class JvViewProduct extends JViewLegacy
{
	
	public function __construct($config = array())
	{
		parent::__construct($config);
		
	}
	public function display($tpl = null)
	{
		$this->form	= $this->get('Form');
		//echo "<pre>";print_r($this->form);
		$this->addToolbar();
		parent::display($tpl);
	}
	
	protected function addToolbar()
	{
		$user		= JFactory::getUser();
		$userId		= $user->get('id');
		$isNew		= ($this->item->id == 0);
		
		JToolbarHelper::title(($isNew ? 'JV new product' : 'JV edit product'));		
		JToolbarHelper::apply('apply');
		JToolbarHelper::save('save');
		JToolbarHelper::save2new('save2new');
		JToolbarHelper::cancel('cancel');
		
	}
	
	
}
