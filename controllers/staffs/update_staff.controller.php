<?php
require '../../database/database.php';
require '../../models/staff.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if ($_POST['cas_id'] !== '' && $_POST['name'] !=='' && $_POST['phone'] !=='' && $_POST['email'] !=='' && $_POST['address'] !=='' && $_POST['role'] !=='') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $id = $_POST['cas_id'];
        $role = $_POST['role'];
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        $update = updateStaffs($id, $name, $phone, $email, $address, $role);

        header('location:/staffs');
    }
}