<?php
/**
 * @package com_jv
 * @copyright   Copyright (C) Joomlavi 2014, Inc. All rights reserved.
 */
defined('_JEXEC') or die;

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





