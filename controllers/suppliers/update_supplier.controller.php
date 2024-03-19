<?php
session_start();
require '../../database/database.php';
require '../../models/supplier.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['sup_id'] !== '' && $_POST['name'] !=='' && $_POST['phone'] !=='' && $_POST['address'] !=='') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $id = $_POST['sup_id'];
        
        $toUpdate = updateSupplier($id, $name, $phone, $address);

        $_SESSION['success'] = 'Update supplier is success';
        header('location:/suppliers');
    }else{
        $_SESSION['error'] = 'form is not complete';
        header('location:/suppliers');
    }
}