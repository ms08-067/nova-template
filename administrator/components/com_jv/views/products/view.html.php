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
		$limit = JRequest::getInt("limit");
		$products->_limit = ($limit <= 0) ? 10 : $limit;
		//echo "<pre>";print_r($products->getData($publish = 0));
		$this->assignRef('products', $products->getData($publish = 0));
		$this->assignRef('pagination', $products->getPagination($publish = 0));
		
		$this->assignRef('limit', $products->_limit);
		
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
