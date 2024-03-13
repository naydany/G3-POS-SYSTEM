<?php
require '../../database/database.php';
require '../../models/payment.model.php';

$id = $_GET['id'];
$cancel = deleteOldPayment($id);
header('Location:/payments');
