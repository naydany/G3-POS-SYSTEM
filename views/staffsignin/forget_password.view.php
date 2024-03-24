
<body class="bg-primary">
    
<div class="main-content" style="margin: auto; width:600px; margin-top: 70px;">

    <div class="card shadow border-0 mx-auto">
        <!-- Page content -->
        <div class="card-body px-lg-5 py-lg-5">
            <h1 class="h3 mb-0 text-dark">Reset Password</h1><br>
            <form action="controllers/usersResetPwd/resset_password.controller.php" method="post">
                <h6 class="mb-3">
                    Enter your username to receive a link by name
                </h6>
                <div class="input-group mb-3">
                    <br>
                    <div>
                        <label class="font-weight-bold">Your email</label>
                        <input type="email" name="email" class="form-control" id="nameInput" required name="staff_password" placeholder="Enter your email" style="width:500px" >
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