<?php
require "../../database/database.php";
require "../../models/payment.model.php";
require "../../models/order.model.php";
require "../../models/item.model.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['price'] !== '' && $_POST['code'] !== '' && $_POST['name'] !== '' && $_POST['quantity'] !== '') {
        $price = $_POST["price"];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $status = "Not Paid";

        $price = (float) str_replace("$", "", $price);
        $result = $price * $quantity;
        $resultWithSymbol = number_format($result, 2) . "$";
        $add = createPayment($code, $resultWithSymbol, $name, $price, $quantity);
    }
    addOrder($name,$price,$quantity,$resultWithSymbol);

    $subtract = getQuantity($name);
    $stock = $subtract["pro_quantity"];
    $stock_quantity = $stock - $quantity;
    updateStock($name,$stock_quantity);
}

header('location: /orders');
