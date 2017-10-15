<?php
/**
*@return ops for check and intergrations
*@use error reportinga dn more
*
**/



class operations{

  public static function displayerrors($check){

      if($check == TRUE){

          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);

      }
  }








}

 ?>
