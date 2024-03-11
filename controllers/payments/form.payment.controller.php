<?php
require "../../database/database.php";
require "../../models/payment.model.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $isSuccess = successPayment($id);
}
require "views/payments/payment.view.php";