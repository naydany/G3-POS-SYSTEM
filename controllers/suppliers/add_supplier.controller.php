<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // echo $name;
    // echo $phone;
    // echo $address;


    $add = createSupplier( $name,  $phone, $address);

    if ($add ){
        header('Location:/suppliers');
    }else{
        header('Location:/create_staffs');
    }
}


