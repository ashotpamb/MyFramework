<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
define("ROOT", dirname(__DIR__));
define("HOME_PATH", '/projects/MyFramework_test/MF/');

require_once "../vendor/autoload.php";
require_once ROOT . "/public/bootstrap.php";
require_once ROOT . "/core/helper/helper.php";
require_once ROOT . "/routes/app.php";


