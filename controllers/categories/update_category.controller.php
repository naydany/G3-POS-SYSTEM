
<?php

require "../../database/database.php";
require "../../models/category.model.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $cate_id = htmlspecialchars($_POST['id']);
    $cate_name = htmlspecialchars($_POST['category']);
    $cate_descrip = htmlspecialchars($_POST['description']);

    if (!empty($cate_id) && !empty($cate_name) && !empty($cate_descrip)) {

        $isUpdated = updateCategory($cate_id, $cate_name, $cate_descrip);
        if ($isUpdated) {
            header('location: /categories');
            $_SESSION['success'] = 'Update category is success';
        } else {
            $_SESSION['error'] = 'Not success';
            
        }
    }else{
        header('location: /categories');
        $_SESSION['error'] = 'form is not complete';
    }
}
