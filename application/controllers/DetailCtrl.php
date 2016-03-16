<?php
include_once("model/Model.php");

class showDetailController {
     public $model;
     public function __construct()
     {
          $this->model = new Model();
     }

     public function showDetail()
     {
          if (isset($_GET['name'])){
               $hotel = $this->model->getHotelByName($_GET['name']);
          }
          
          include_once("view/template/detail.php");
     }
}

?>
