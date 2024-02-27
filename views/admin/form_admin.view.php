<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col">
            <div class="card shadow " style="width: 700px;">
                <div class="card-header border-0 text-primary text-center">
                    <h3>Please input data of admin</h3>
                </div>
                <div class="card-body">
                    <form action="../../controllers/admin/add_new_admin.controller.php" class='d-flex flex-xl-column' method='post'>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>Admin Name:</label>
                                <input type="text" name="name" class="form-control">
                                <input type="hidden" name="prod_id" value="" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="email">email:</label>
                                <input type="text" class="form-control" id="email" name='email'>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">password:</label>
                                <input type="number" class="form-control" id="password" name='password'>
                            </div>
                            <div class="col-md-6">
                                <label for="address">address:</label>
                                <input type="text" class="form-control" id="address" name='address'>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="number">number phone:</label>
                                <input type="number" class="form-control" id="number" name='number'>
                            </div>
                            <div class="col-md-6 mt-4">
                                <select class="custom-select" name="role" id="inputGroupSelect02">
                                    <option selected>Choose...</option>
                                    <option value="admin">Admin</option>
                                </select>

                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Add admin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </form>

</div>