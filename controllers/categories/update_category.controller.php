<?php
require '../../database/database.php';
require '../../models/category.model.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    if ($_POST['id'] !== '' && $_POST['category'] !== '' ){
        $id = $_POST["id"];
        $category = $_POST["category"];
        $description = $_POST["description"];


        echo $id;
        echo $category;
        echo $description;

        $update = updateCategory($id, $category, $description);

        if($update){
            header("Location:/categories");
        }else{
            header("Location:/categories");
        }
      
       
    }
}
