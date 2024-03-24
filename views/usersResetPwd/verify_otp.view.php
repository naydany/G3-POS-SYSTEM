<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" id="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['success'] ?>
    </div>
<?php
    unset($_SESSION['success']);
endif;
?>
<?php if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show align-center" id="alert" style="width: 350px;">
        <div class="card-body px-lg-5 py-lg-5">
            <form action="">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $_SESSION['error'] ?>
            </form>
        </div>
    </div>
<?php
    unset($_SESSION['error']);
endif;
?>

<body class="bg-primary">

    <div class="main-content" style="margin: auto; width:600px; margin-top: 70px;">

        <div class="card shadow border-0 mx-auto ">
            <!-- Page content -->
            <div class="card-body px-lg-5 py-lg-5">
                <h1 class="h3 mb-0 text-dark">Verify with OTP</h1><br>
                <form action="controllers/usersResetPwd/comfirm_otp.controller.php" method="post">

                    <div class="input-group mb-3">
                        <br>
                        <div>
                            <label class="">Enter Code</label>
                            <input type="text" name="otp" class="form-control" id="nameInput" required name="password_otp" placeholder="code ..." style="width:500px">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <!-- <a href="/forget_password" class="mt-5">Forgot your password?</a> -->
                        <!-- <button class="btn btn-secondary my-4">Cancel</button> -->
                        <button class="btn btn-primary my-4 ml-3 align-end">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>