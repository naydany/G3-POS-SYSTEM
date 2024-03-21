


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


<div class="container mt-4">
    <h5 class="mt-2">Table store admin</h5>
    <?php if ($_SESSION['user']['role'] != 'stock manager') : ?>
        <button type="button" class="btn btn-outline-primary mr-5 mt-3" data-toggle="modal" data-target="#modalAdmin">
            <i class="fas fa-user-plus"></i> Add new admin
        </button>
    <?php endif; ?>
</div>

<div class="container mt-4">
    <table class="table" style="font-size: 14px; text-align: center;">
        <thead class="bg-primary text-white thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <?php if ($_SESSION['user']['role'] != 'stock manager') : ?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
        </thead>

        <tbody>
            <?php
            $users = getUser();
            foreach ($users as $user) :
            ?>
                <!-- *popup update admin -->
                <div class="modal fade" id="modalUpdate<?= $user['id'] ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content card p-5 ml-3 w-200">
                            <!-- <div class="card p-5 ml-3 w-200"> -->

                            <h3>Update</h3>
                            <form action="../../controllers/admin/update_admin.controller.php" class='d-flex flex-xl-column' method='post'>
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <div class="form-group">
                                    <label for="name">name:</label>
                                    <input type="text" class="form-control" id="name" name='name' value="<?= $user['name'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="email">email:</label>
                                    <input type="text" class="form-control" id="email" name='email' value="<?= $user['email'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="address">address:</label>
                                    <input type="text" class="form-control" id="address" name='address' value="<?= $user['address'] ?>">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>


<tr>
    <td><?= $user['id'] ?></td>
    <td><?= $user['name'] ?></td>
    <td><?= $user['email'] ?></td>
    <td><?= $user['address'] ?></td>
    <?php if ($_SESSION['user']['role'] != 'stock manager') : ?>
        <td>
            <div class="btn-group">

                <a onclick="return confirm('Do you want to delete this product?')" href="controllers/admin/delete_admin.controller.php?id=<?= $user['id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal" data-target="#modalUpdate<?= $user['id'] ?>"></i>

            </div>
        </td>
    <?php endif; ?>
</tr>
</tbody>
<?php endforeach; ?>
</table>
</div>

<!-- *popup create staff -->

<div class="modal fade" id="modalAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class=" d-flex justify-content-center admin_show modal-content">
            <div class="row">
                <div class="col">
                    <div class="card shadow " style="width: 700px;">
                        <div class="card-header border-0 text-primary text-center">
                            <h3>Please input data of admin</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="card-body">
                            <form action="../../controllers/admin/add_new_admin.controller.php" class='d-flex flex-xl-column' method='post' enctype="multipart/form-data">
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
                                            <!-- <option selected>Choose...</option> -->
                                            <option value="admin">Admin</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group " style="width: 700px;">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Insert Image" name="imageprofile">
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add admin</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>