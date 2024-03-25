

<?php
require '../../database/database.php';
require '../../models/admin.model.php';
// Start session
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['confirm_pwd'];
    if(!empty($_POST['new_pwd']) && !empty($_POST['confirm_pwd'])){
        $new_Pwd = $_POST['new_pwd'];
        $confirm_Pwd = $_POST['confirm_pwd'];
        $email = $_SESSION['email'];
        $isMatch = 0;

        // Check script
        function cleanData($data){
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        $cleanNewPwd = cleanData($new_Pwd);
        $cleanConfirmPwd = cleanData($confirm_Pwd);

        // echo strlen($cleanNewPwd);
        // echo strlen($cleanConfirmPwd);

        // Check Pasword
        if(strlen($cleanNewPwd) == strlen($cleanConfirmPwd)){
            for($i = 0; $i < strlen($new_Pwd); $i++){
                if($cleanNewPwd[$i] == $cleanConfirmPwd[$i]){
                    $isMatch += 1;
                };
            }

            // Change if it stay with true condition
            if($isMatch == strlen($cleanNewPwd)){

                // Encrypt password 
                $pwdEncrypt = password_hash($cleanNewPwd,PASSWORD_BCRYPT);



                // Cnange password
                changePassword($pwdEncrypt,$email);

                // Back to your account for login
                // header('location: /login');

           
                $_SESSION['success'] = 'success';

                if ($_SESSION['user']['role']=='admin'){
                    // header('location: /form_admin_signin');
                    echo $_SESSION['user']['role'];
                }else if($_SESSION['user']['role']=='cashier' || $_SESSION['user']['role']=='stock manager'){
                    // header('location: /form_staff_signin');
                }
                
            }else{
                $_SESSION['error'] = 'fail';
                
            }
        }else{
            $_SESSION['error'] = 'Passwold not mach together!';
            // header('location: /views/login/change.pwd.view.php');
            header('Location: /change_password');
        }
    }else{
        $_SESSION['error'] = '';
        // header('location: /views/login/change.pwd.view.php');
       
    }
}