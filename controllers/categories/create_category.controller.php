<?php
require "../../database/database.php";
require "../../models/category.model.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['category'] !== '' && $_POST['description'] !== '' ) {
        $category = $_POST["category"];
        $description = $_POST['description'];

<<<<<<< HEAD
        $add = createCategory($category, $description);
            header("Location:/categories");
    }else {
        echo "Please file all form";
=======

    $add = createCategory($category);
    echo $add;

    if($add){
        header("Location:/categories");
    }else{
        header("Location:/create_form_cate");
>>>>>>> fc55b72 ([imp] update style of table in category POS-24)
    }
}
