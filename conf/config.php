<?php

session_start();
$_SERVER['DOCUMENT_ROOT'] = '/var/www/u0789349/data/www/newsitetesting.ru/';
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CONTROLLER_PATH', ROOT. '/controllers/');
define('MODEL_PATH', ROOT. '/models/');
define('VIEW_PATH', ROOT. '/views/');
define('UPLOADAVATAR_DIR', ROOT. '/image/avatar/');
define('UPLOADDREAM_DIR', ROOT. '/image/dreamimage/');

require_once('db.php');
require_once('route.php');
require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';
require_once CONTROLLER_PATH. 'Controller.php';

Routing::buildRoute();