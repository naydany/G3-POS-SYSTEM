
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

<style>
    html,
    body {
        background-color: #000;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    img {
        width: 100%;
        height: 100vh;
        object-fit: cover;        position: absolute;
        /* filter: blur(15px); */
    }

    .full-height {
        height: 100vh;
    }
    .flex-center {
        display: flex;
        margin: auto;
        align-items: center;
        justify-content: center;
    }

    .content {
        /* text-align: center; */
        
        background-color: #000;
        /* padding: 10%; */
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        -webkit-backdrop-filter: blur(90px);
        backdrop-filter: blur(70px);
        box-shadow: 0 8px 32px 0 rgba (0, 0, 0, 0.37);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 50px;
    }

</style>
<body class="bg-light text-dark">

    <div class="bg-gradient-primar py-7 flex-center position-ref full-height">
        <img src="https://images.ctfassets.net/v6ivjcl8qjz2/4EPg6nQmCQvE8zIPnITawR/095ca07e1aa51f65df2eb438d0dde21b/homepage-purple-system-line-bg-tablet-1200x450-2x.jpg?fit=scale&fm=webp" alt="">

        <div class="content">
            <div class="main-content " style="margin: auto; width:1200px">
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
                        <div class="card bg-light shadow border-0" style="border-radius: 15px;">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>