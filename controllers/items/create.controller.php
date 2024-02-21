<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    // $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['name'];
    $pro_img = $_POST['image'];
    $pro_code = $_POST['code'];
    $pro_cate = $_POST['cate'];
    $pro_quan = $_POST['quantity'];
    $pro_price = $_POST['price'];
   

    $isCreated = createItem($pro_name, $pro_code, $pro_img, $pro_price, $pro_quan, $pro_cate);

    if ($isCreated){
        header('location: /items');
    } else{
        header('location: /form_create_pro');
    }
}