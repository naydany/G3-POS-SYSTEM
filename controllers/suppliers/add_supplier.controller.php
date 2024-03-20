<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    $add = createSupplier( $name,  $phone, $address);

    if ($add ){
        header('Location:/suppliers');
    }else{
        header('Location:/create_staffs');
    }
}


