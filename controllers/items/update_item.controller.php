<?php
session_start();
require_once '../../database/database.php';
require_once '../../models/item.model.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $pro_name = htmlspecialchars($_POST['name']);
    $pro_code = htmlspecialchars($_POST['code']);
    $pro_price = htmlspecialchars($_POST['price']);
    // $pro_cate = htmlspecialchars($_POST['cate']);
    $pro_quan = htmlspecialchars($_POST['quantity']);
    $pro_id = htmlspecialchars($_POST['id']);


    if (!empty($pro_name) && !empty($pro_code) && !empty($pro_price) && !empty($pro_quan) && !empty($pro_id)) {
        $isUpdated = updateItem($pro_name, $pro_code, $pro_price, $pro_quan, $pro_id);
        if ($isUpdated) {
            header('location: /items');
            $_SESSION['success'] = 'Update category is success';
        } else {
            $_SESSION['error'] = 'Error update';
        }
    }else{
        header('location: /items');
        $_SESSION['error'] = 'form is not complete';
    }
}
