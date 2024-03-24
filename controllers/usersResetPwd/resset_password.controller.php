

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../../vendor/autoload.php';
require '../../database/database.php';
require '../../models/admin.model.php';

session_start();

// Get value from input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $OTP = mt_rand(100000, 999999);
        $setOTP = OTP($email,$OTP);
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'danynay0328@gmail.com';                     //SMTP username
            $mail->Password   = 'lntv lruf ocob zvkk';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('danynay0328@gmail.com', 'POS-System');
            $mail->addAddress($email, 'Rady');     //Add a recipient
         
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'POS-System';
            $mail->Body    = "<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <h3>So here is your verify OTP code is $OTP <br></h3
            <p>And you can also click the below link to reset your password</p>
            http://localhost/login-System/Login-System-main/reset_psw.php
            <br><br>
            <p>With regrads,</p>
            <b>Programming with Lam</b>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
  
            header('Location: /verify_otp');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
    // require '../../views/adminlogin/comfirm_password.view.php';
}
