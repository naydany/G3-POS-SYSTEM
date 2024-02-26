




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
    <div class="alert alert-danger alert-dismissible fade show" id="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['error'] ?>
    </div>
<?php
    unset($_SESSION['error']);
endif;
?>

<body class="bg-dark">

    <div class="main-content  " style="margin: auto; width:1200px">
        <div class="header bg-gradient-primar py-7">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-6 mt-5">
                            <h1 class="text-light">Point Of Sale Management System Admin</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form action="../../controllers/adminlogin/admin_signin_check.controller.php" method="post">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                        </div>
                                        <input class="form-control" required name="admin_email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-unlock-fill"></i></span>
                                        </div>
                                        <input class="form-control" required name="admin_password" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-dark">Remember me</span>
                                    </label>
                                </div>
                                <div class="row justify-content-between">
                                    <a href="/" class="btn btn-primary my-4 ml-3">Back</a>
                                   <!-- <a href="/admin" class="btn btn-primary my-4 m r-3">Log In</a> -->
                                   <button type="submit" name="login" class="btn btn-primary my-4 mr-3">Log In</button>
                                </div>
                               
                            </form>

</body>