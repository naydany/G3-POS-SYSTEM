<?php
session_start();
require '../../database/database.php';
require '../../models/staff.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $imgProfile = $_FILES['image'];
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $role = htmlspecialchars($_POST['roles']);

    
    if (!empty($name) && !empty($email) && !empty($password) && !empty($number) && !empty($address) && !empty($role)) {
        $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
    
        $staff = accountExist($email);

        if (count($staff) == 0) {
            createStaffs($name, $number, $email, $encryptPassword,$address,$role);
            header('Location: /staffs');
            $_SESSION['success'] = "Account successfully created";
          
        } else {
            $_SESSION['error'] = "Account already exists";
            header('Location:/create_staffs');
           
        }
    } else {
        $_SESSION['error'] = "Please fill all the fields";
        header('Location: /admin');
    }
}
