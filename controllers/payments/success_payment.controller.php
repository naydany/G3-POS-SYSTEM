<?php
require "database/database.php";
require "models/payment.model.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['code'] !== '' && $_POST['product'] !== '' && $_POST['total price'] !== '' && $_POST['card'] !== '') {
        $code = $_POST["code"];
        $price = $_POST['product'];
        $total = $_POST['total price'];
        $card = $_POST['card'];
    }
}