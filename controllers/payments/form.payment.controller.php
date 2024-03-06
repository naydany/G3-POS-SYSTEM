<?php
require "database/database.php";
require "models/payment.model.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // echo $id;
    $isSuccess = successPayment($id);
    // var_dump($isSuccess);


    // echo $isSuccess['pay_name'];

    // foreach ($isSuccess as $sucess){
    //     echo $sucess['pro_name'];
    // }


}
require "views/payments/form_payment.view.php";