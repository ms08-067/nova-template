<?php
/**
 * @version        $Id: index.php 20806 2011-02-21 19:44:59Z dextercowley $
 * @package        Joomla.Site
 * @copyright    Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */                 
include_once '../lib.php';

//$db = JFactory::getDbo();
//echo "<pre>";print_r($db);
print_r($_POST);exit;
$post = json_decode($_POST["jSonContactList"]);
echo $post["phoneNumber"];exit;
echo "<pre>";print_r($post);
