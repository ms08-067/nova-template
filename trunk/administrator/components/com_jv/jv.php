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

/*
$controller = JControllerLegacy::getInstance('Jv');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
*/
JLoader::register('JvHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'jv.php');
$controllerName = JRequest::getVar('controller');
if ($controllerName == '') {
	$view = JRequest::getCmd('view');
	if ($view && file_exists(JPATH_COMPONENT_ADMINISTRATOR.'controllers/'.strtolower($view).'.php'))
		$controllerName = $view;
}
$path = $controllerName ? JPATH_COMPONENT_ADMINISTRATOR.'/controllers/'.strtolower($controllerName).'.php' : JPATH_COMPONENT_ADMINISTRATOR.'/controller.php';

if (!file_exists($path))
	$path = JPATH_COMPONENT_ADMINISTRATOR.'/controller.php';

require_once $path;
$className = "JvController$controllerName";
//echo $className;exit;
$controller = new $className();

$controller->execute(JRequest::getCmd('task'));
//$controller = JControllerLegacy::getInstance('Jv');
$controller->redirect();

