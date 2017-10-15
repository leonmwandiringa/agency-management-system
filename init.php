<?php
/**
*@return intialization of autoload
*@use autoload. inclusion in 1 script
*
**/
session_start();

require_once "includes/constants.php";

$GLOBALS['config'] = array(

  "mysql"=>array(

    "host"=>DB_HOST,
    "name"=>DB_NAME,
    "username"=>DB_USERNAME,
    "password"=>DB_PASSWORD
  )

);
//autoload classes
spl_autoload_register(function($class){

require_once "classes/".$class.".php";

});
//execute error check
operations::displayerrors(DISPLAY_ERRORS);


 ?>
