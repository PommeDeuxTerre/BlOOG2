<?php

// session

use model\Manager\PermissionManager;
use model\Mapping\PermissionMapping;

session_start();

// Appel de la config
require_once "../config.php";

// our autoload
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require PROJECT_DIRECTORY.'/' .$class . '.php';
});

$dsn =  DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET;
$PDOconnect = new PDO($dsn, DB_LOGIN, DB_PWD);

$permissionManager = new PermissionManager($PDOconnect);

require_once(PROJECT_DIRECTORY."/view/permission/permission.homepage.view.php");

var_dump($permissionManager);