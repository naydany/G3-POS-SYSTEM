<?php
session_start();
require '../../database/database.php';
require '../../models/admin_login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $imgProfile = $_FILES['image'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['admin_email']);
    $password = htmlspecialchars($_POST['admin_password']);
    $role = htmlspecialchars($_POST['role']);

    echo $role;
    
    if (!empty($name) && !empty($email) && !empty($password)) {
        $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
    
        $admin = accountExist($email);

        if (count($admin) == 0) {
            createAccount($name, $email, $encryptPassword, $role);
            header('Location: /form_admin_signin');
            $_SESSION['success'] = "Account successfully created";
          
        } else {
            $_SESSION['error'] = "Account already exists";
            header('Location: /form_admin_signup');
           
        }
    } else {
        $_SESSION['error'] = "Please fill all the fields";
        header('Location: /form_admin_signup');
        echo 'da';
    }
}
