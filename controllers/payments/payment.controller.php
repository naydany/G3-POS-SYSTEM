<?php
require "models/payment.model.php";


$news = getPayments();
$allOldPays = getOldPayments();

$customer = 0;
$lastIndex = null;

foreach ($allOldPays as $index => $allOldPay) {
    if ($index === array_key_last($allOldPays)) {
        $customer += $allOldPay['cus_id'] + 1;
        $lastIndex = $index;
    }
}

$ToTal = 0;
$Code = "";
foreach ($news as $new) {
    $ToTal +=  $new['pay_totalprice'];
    $Code .=  $new['pay_code'].", ";
}
$Code = rtrim($Code, ", ");
require "views/payments/payment.view.php";
