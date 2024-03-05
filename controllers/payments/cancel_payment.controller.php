<?php
require '../../database/database.php';
require '../../models/payment.model.php';

// echo $_GET['id'];

$id = $_GET['id'];

$cancel = cancelPayment($id);

header('Location:/payments');
