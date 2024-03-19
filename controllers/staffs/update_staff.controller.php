<?php
session_start();
require '../../database/database.php';
require '../../models/staff.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['cas_id'] !== '' && $_POST['name'] !== '' && $_POST['number'] !== '' && $_POST['email'] !== '' && $_POST['address'] !== '') {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $id = $_POST['cas_id'];


        $updateStaff = updateStaffs($id, $name, $number, $email, $address);
        header('location:/staffs');
        $_SESSION['success'] = 'Update staff is success';
    } else {
        $_SESSION['error'] = 'form is not complete';

        header('location:/staffs');
    }
}
