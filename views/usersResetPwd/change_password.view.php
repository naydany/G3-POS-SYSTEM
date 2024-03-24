
<body class="bg-primary">
    
<div class="main-content bg-primary" style="margin: auto; width:600px; margin-top: 70px;">

    <div class="card shadow border-0 mx-auto ">
        <!-- Page content -->
        <div class="card-body px-lg-5 py-lg-5">
            <h1 class="h3 mb-0 text-dark">Change Password</h1><br>
            <form action="controllers/usersResetPwd/change_password.controller.php" method="post">

                <div class="input-group mb-3">
                    <br>
                    <div>
                        <label >Inter password</label>
                        <input type="number" name="new_pwd" class="form-control" id="nameInput" required name="password" placeholder="new password" style="width:500px">
                    </div>
                    <div>
                        <label>Comfirm password</label>
                        <input type="number" name="confirm_pwd" class="form-control" id="nameInput" required name="password" placeholder="comfirm password" style="width:500px">
                    </div>
                </div>
                <div class="row justify-content-between">
                    <button class="btn btn-primary my-4 ml-3 align-end">save change</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>