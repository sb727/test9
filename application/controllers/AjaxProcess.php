<?php
include_once("../model/Model.php");

class Controller {
     public $model;
     
     public function __construct()
     {
          $this->model = new Model();
     }
	
     public function showAllHotels()
	{
          $Hotels = $this->model->getHotelList();          
     }

     public function showSearchedHotels($where)
     {
          $Hotels = $this->model->getHotelByLocation($where); 
          echo json_encode($Hotels);
     }
}

$controller = new Controller();
//echo $_POST['in_location'];
//exit;

if (isset($_POST['in_location']))
{
     $controller->showSearchedHotels($_POST['in_location']); 
} 
else {
     $controller->showAllHotels();
}    
                   
 
          
?>