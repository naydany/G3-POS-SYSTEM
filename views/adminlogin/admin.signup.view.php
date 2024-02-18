<?php if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" id="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?= $_SESSION['error'] ?>
    </div>
<?php
    session_destroy();
endif;
?>


<body class="bg-light">
    <div class="main-content  " style="margin: auto; width:1200px">
        <div class="header bg-gradient-primar py-7">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mt-3 col-md-6">
                            <h1 class="text-dark">To create New Account for login</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt-3 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form method="post" role="form">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <label for="">Profile:</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <hr>
                                        <a href="/signin">Already have account</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>