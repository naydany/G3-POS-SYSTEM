<?php
require '../../database/database.php';
require '../../models/category.model.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = deleteCategory($id);
    echo $test;

    if($delete){
        header("Location:/categories");
    }else{
        header("Location:/categories");
    }
}