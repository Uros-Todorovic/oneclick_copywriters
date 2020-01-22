<?php

 require_once("includes/class_loader.php");

 $database = Database::get_instance();

 $session = Session::get_session();
 

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__DIR__));
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');





