<?php
/**
 * @subpackage  com_jv
 *
 */
defined('_JEXEC') or die;

/**
 * View to edit an product.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 * @since       1.6
 */
class JvViewProduct extends JViewLegacy
{
	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		$this->addToolbar();
		parent::display($tpl);
	}
	protected function addToolbar()
	{
		
		$bar = JToolBar::getInstance('toolbar');
		$user		= JFactory::getUser();
		$userId		= $user->get('id');
		$isNew		= ($this->item->id == 0);
		
		// Built the actions for new and existing records.
		$canDo		= $this->canDo;
		
		JToolbarHelper::title(($isNew ? 'JV new product' : 'JV edit product'));
		
		JToolbarHelper::apply('product.apply');
		JToolbarHelper::save('product.save');
		JToolbarHelper::save2new('product.save2new');
		JToolbarHelper::cancel('product.cancel');
		
	}
}
