<?php
include_once("models/Model.php");

class Controller {
     public $model;
     
     public function __construct()
     {
          $this->model = new Model();
     }
	
     public function invoke()
	{                 
               include_once 'views/template/header.php';
               include_once 'views/template/banner.php';
               include_once 'views/template/search.php';
               include_once 'views/template/destination.php';
               include_once 'views/template/footer.php';          
     }
}

?>
