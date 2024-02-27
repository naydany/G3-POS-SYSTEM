
<?php
session_start();

require '../../database/database.php';
require '../../models/admin_login.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['admin_email']);
    $password = htmlspecialchars($_POST['admin_password']);

    $user = accountExist($email);
    if (count($user) > 0) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['success'] = "Login successful";
            // $_SESSION['user'] = [$user['id'], $user['email']];
            $_SESSION['user'] = $user;

            if ($user['role'] === 'admin') {
                header('Location:/admin');
            } else {
                header('Location:/normal');
            }
        } else {
            $_SESSION['error'] = "Wrong password";
            
            header('Location:/form_admin_signin');
        }
    } else {
        $_SESSION['error'] = "Please enter a valid email";
        header('Location: /form_admin_signin');
    }
}


