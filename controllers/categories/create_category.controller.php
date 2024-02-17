<?php
require_once("../../database/database.php");
require_once ("../../models/category.model.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $category = $_POST["category"];


    $add = createCategory($category);
    echo $add;

    if($add){
        header("Location:/categories");
    }else{
        header("Location:/create_form_cate");
    }
}
?>
