

<?php
session_start();

require '../../database/database.php';
require '../../models/staff_login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = htmlspecialchars($_POST['staff_email']);

    $password = htmlspecialchars($_POST['staff_password']);
    $staff = accountExist($email);
   
    if(count($staff) > 0) {
        
        if (password_verify($password, $staff['cas_password'])) {
            $_SESSION['success'] = "Login successful";
            $_SESSION['user'] = $staff;

            if ($staff['role'] === 'staff') {
                header('Location:/admin');
            } 

        } else {
            $_SESSION['error'] = "Wrong password";
            header('Location:/form_staff_signin');
        }
    } else {
        $_SESSION['error'] = "Please enter a valid email";
        header('Location: /form_staff_signin');
    }
}

