<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

$isUpdateID = $_GET['pro_id'];
if(isset($_POST['submit'])){
    // $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['name'];
    $pro_code = $_POST['code'];
    $pro_price = $_POST['price'];
    $pro_cate = $_POST['cate'];
    $pro_quan = $_POST['quantity'];
 
   
    $isUpdated = updateItem($pro_name, $pro_code, $pro_price, $pro_quan, $pro_cate);
    if ($isUpdated){
        header('location: /items');
    } else{
        header('location: /update_item');
    }
}
