<?php
session_start();
require '../../database/database.php';
require '../../models/admin.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) &&!empty($_POST['address'])) {
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        // $password = $_POST['password'];
        $address = htmlspecialchars($_POST['address']);
        $id = htmlspecialchars($_POST['id']);
        
        $update = updateAdmin($id, $name,$phone, $email, $address);
        $_SESSION['success'] = 'Update admin is success';
        header('location:/admin_table');
        
    }else{
        header('location:/admin_table');
        $_SESSION['error'] = 'form is not complete';
    }
}