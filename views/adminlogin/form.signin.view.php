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

<body class="bg-dark" style="background-image: url(https://static.vecteezy.com/system/resources/previews/006/852/804/non_2x/abstract-blue-background-simple-design-for-your-website-free-vector.jpg); background-size: cover; background-position: center; width: 100%; user-select: none;">

    <div class="main-content" style="margin: auto; width:600px; margin-top: 120px;">

        <div class="card shadow border-0 mx-auto" style="text-align: center; padding: 5%; background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); -webkit-backdrop-filter: blur(90px); backdrop-filter: blur(10px); box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37); border: 1px solid rgba(255, 255, 255, 0.18); border-radius: 32px;">

            <!-- Page content -->
            <div class="card-body px-lg-5 py-lg-5">
                <h1 class="h3 mb-0 text-white">Admin</h1><br>
                <form action="../../controllers/adminlogin/admin_signin_check.controller.php" ; method="post">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            </div>
                            <input class="form-control" required name="admin_email" placeholder="Email" type="email">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="passwordInput" required name="admin_password" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text" style="display: block;" id="hidePass" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
                            <span class="input-group-text" style="display: none;" id="showPass" onclick="togglePasswordVisibility()"><i class="bi-eye"></i></span>
                        </div>
                    </div>

                    <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for="customCheckLogin">
                            <span class="text-dark">Remember me</span>
                        </label>
                    </div>
                    <div class="row justify-content-between">
                        <a href="/" class="btn btn-primary my-4">Back</a>
                        <button type="submit" name="login" class="btn btn-primary my-4 mr-3">Log In</button>
                    </div>
                </form>
            </div>
        </div>


        <script>
            const passwordInput = document.getElementById("passwordInput");
            const hidePass = document.getElementById("hidePass");
            const showPass = document.getElementById("showPass");

            function togglePasswordVisibility() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    hidePass.style.display = "none";
                    showPass.style.display = "block";
                } else {
                    passwordInput.type = "password";
                    hidePass.style.display = "block";
                    showPass.style.display = "none";
                }
            }
            togglePasswordIcon.addEventListener("click", togglePasswordVisibility);
        </script>
    </div>
    </div>
    </div>
    </div>
</body>