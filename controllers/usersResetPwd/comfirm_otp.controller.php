
<?php
require '../../database/database.php';
require '../../models/admin.model.php';

// Start session
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['otp'])){
        $OTP = $_POST['otp'];
        $OTP = htmlspecialchars($OTP);
        $OTP = trim($OTP);
        $isConfirm = confirmOTP($OTP);
       
        if($isConfirm){
            $_SESSION['success'] = 'success';
            
            header('Location: /change_password');
        }
        else{
            $_SESSION['error'] = 'fail';
            // header('location: /controllers/login/verification.controller.php');
        }
    }
}
