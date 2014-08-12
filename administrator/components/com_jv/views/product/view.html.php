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
		
		$id	 	    = JRequest::getInt("id");
		if($id){
			
			$this->assignRef('product', JvHelper::getProduct($id));
		}
		$this->addToolbar();
		parent::display($tpl);
	}
	
	protected function addToolbar()
	{
		
		$user		= JFactory::getUser();
		$id	 	    = JRequest::getInt("id");
		
		JToolbarHelper::title(($id ? 'JV Edit Product '.$id : 'JV New Product'));		
		JToolbarHelper::apply('apply');
		JToolbarHelper::save('save');
		JToolbarHelper::save2new('save2new');
		JToolbarHelper::cancel('cancel');
		
	}
	
	
}
