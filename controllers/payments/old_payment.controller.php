<?php
require "../../database/database.php";
require "../../models/payment.model.php";
require "../../models/order.model.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['customerID'] !== '' && $_POST['code'] !== '' && $_POST['amounts'] !== '' && $_POST['pay_method'] !== '') {
        $method = $_POST["pay_method"];
        $amounts = $_POST['amounts'];
        $customerID = $_POST['customerID'];
        $code = $_POST['code'];
        $Paid = "Paid";

        $news = getPayments();
        foreach ($news as $new) {
            $date = $new['pay_date'];
            $addMore_oldPayment = addMoreoldPayment($method, $customerID, $date);
            $Paid = updateOrder($Paid,$date);
        }
    }
}
$add_oldPayment = oldPayment();
$getOldPayments = getOldPayments();

deletOrder();
header('Location:/payments');


