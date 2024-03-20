<?php
require '../../database/database.php';
require '../../models/supplier.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['name'] && $_POST['phone'] && $address = $_POST['address'])) {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $address =  htmlspecialchars($_POST['address']);

        $add = createSupplier($name,  $phone, $address);

        if ($add) {
            header('Location:/suppliers');
            $_SESSION['success']= 'Add new supplier was successfully';
        } 
    }else{
        header('Location:/suppliers');
        $_SESSION['error']='You need to complete place emty!';
    }
}
