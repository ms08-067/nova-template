<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_jv
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('behavior.tabstate');


$controller = JControllerLegacy::getInstance('Jv');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
