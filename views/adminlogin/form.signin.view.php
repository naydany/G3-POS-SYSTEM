<div class="main-content  " style="margin: auto; width:1200px">
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
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    </div>
                                    <input class="form-control" required name="staff_email" placeholder="Email" type="email">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="passwordInput" required name="staff_password" placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="display: block;" id="hidePass" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
                                    <span class="input-group-text" style="display: none;" id="showPass" onclick="togglePasswordVisibility()"><i class="bi-eye"></i></span>
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

                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-dark">Remember me</span>
                                </label>
                            </div>
                            <div class="row justify-content-between">
                                <a href="/" class="btn btn-primary my-4"><i class="bi bi-chevron-double-left"> Back</i></a>
                                <a href="/admin" class="btn btn-primary my-4">Log In</a>
                            </div>
                        </form>

                        </body>