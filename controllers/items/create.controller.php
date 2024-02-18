<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    // $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_code = $_POST['pro_code'];
    $pro_desc = $_POST['pro_desc'];
    $pro_img = $_POST['pro_image'];
    $pro_price = $_POST['pro_price'];
    $pro_date = $_POST['pro_date'];

    $isCreated = createItem($pro_name, $pro_code, $pro_desc, $pro_img, $pro_price, $pro_date);

    if ($isCreated){
        header('location: /items');
    } else{
        header('location: /form_create_pro');
    }
}