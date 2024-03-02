<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $pro_name = $_POST['name'];
        $pro_code = $_POST['code'];
        $pro_price = $_POST['price'];
        $pro_cate = $_POST['cate'];
        $pro_quan = $_POST['quantity'];
        $pro_id=$_POST['id'];

        $isUpdated = updateItem($pro_name, $pro_code, $pro_price, $pro_quan, $pro_id);
        if ($isUpdated) {
            header('location: /items');
        } else {
            header('location: /update_item');
        }

}

