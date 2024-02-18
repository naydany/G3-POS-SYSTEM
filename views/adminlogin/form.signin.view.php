

<div class="main-content  " style="margin: auto; width:1200px" >
    <div class="header bg-gradient-primar py-7">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-6 mt-5">
                        <h1 class="text-dark">Point Of Sale Management System</h1>
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
                        <form action="/admin" method="post">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    </div>
                                    <input class="form-control" required name="staff_email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-unlock-fill"></i></span>
                                    </div>
                                    <input class="form-control" required name="staff_password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-dark">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="login" class="btn btn-primary my-4">Log In</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <!-- <a href="../admin/forgot_pwd.php" target="_blank" class="text-light"><small>Forgot password?</small></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>