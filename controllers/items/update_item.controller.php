<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $pro_name = htmlspecialchars($_POST['name']);
        $pro_code = htmlspecialchars($_POST['code']);
        $pro_price = htmlspecialchars($_POST['price']);
        $pro_cate = htmlspecialchars($_POST['cate']);
        $pro_quan = htmlspecialchars($_POST['quantity']);
        $pro_id= htmlspecialchars($_POST['id']);

        $isUpdated = updateItem($pro_name, $pro_code, $pro_price, $pro_quan, $pro_id);
        if ($isUpdated) {
            header('location: /items');
        } else {
            header('location: /update_item');
        }

}


