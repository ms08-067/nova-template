<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * View class for a list of products.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 * @since       1.6
 */

class JvViewCategories extends JViewLegacy
{
	protected $items;

	protected $pagination;

	protected $state;


	public function display($tpl = null)
	{
		
		$categories = new JvModelCategories();
		$this->assignRef('categories', $categories->getData());
		$this->addToolbar();
		$this->sidebar = JHtmlSidebar::render();
		parent::display($tpl);
	}
	protected function addToolbar()
	{
		$bar = JToolBar::getInstance('toolbar');
		JToolbarHelper::title('JV Products List');
		JToolbarHelper::addNew('add');
		JToolbarHelper::deleteList('', 'remove', 'Delete');
	}


}
