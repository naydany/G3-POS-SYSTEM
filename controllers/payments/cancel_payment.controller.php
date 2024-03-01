<?php
require '../../database/database.php';
require '../../models/payment.model.php';

echo $_GET['pay_id'];

$id = $_GET['pay_id'];

$cancel = cancelPayment($id);

header('Location:/payments');
