<?php
require '../../database/database.php';
require '../../models/category.model.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    if ($_POST['id'] !== '' && $_POST['category'] !== '' ){
        $id = $_POST["id"];
        $category = $_POST["category"];

        $update = updateCategory($id, $category);

        if($update){
            header("Location:/categories");
        }else{
            header("Location:/categories");
        }
      
       
    }
}
