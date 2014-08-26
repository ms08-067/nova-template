<?php
/**
 * @subpackage  com_jv
 */

defined('_JEXEC') or die;

/**
 * View class for a list of products.
 * @subpackage  com_jv
 */

class JvViewProducts extends JViewLegacy
{
	protected $items;

	protected $pagination;

	protected $state;


	public function display($tpl = null)
	{
		$products = new JvModelProduct();
		
		$this->assignRef('products', $products->getData());
		
		$this->addToolbar();
		
		$this->sidebar = JHtmlSidebar::render();
		
		parent::display($tpl);
	}
	protected function addToolbar()
	{
			
		$bar = JToolBar::getInstance('toolbar');
		JToolbarHelper::title('JV Products List');
		JToolbarHelper::addNew('add');
		JToolbarHelper::deleteList('Are you sure you want to do this?', 'delete', 'Delete');
		
	}


}