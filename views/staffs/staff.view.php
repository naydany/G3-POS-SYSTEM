<div class="container mt-4">

    <button type="button" class="btn btn-outline-primary mr-5" data-toggle="modal" data-target="#modalsCreate">
        <i class="fas fa-user-plus"></i> Add new Staff
    </button>
</div>

<div class="container mt-4">
    <table class="table" style="font-size: 14px">
        <thead class="bg-primary text-white thead-light">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">name</th>
                <th class="text-center">number</th>
                <th class="text-center">emial</th>
                <th class="text-center">address</th>
                <th class="text-center">role</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $users = getstaffs();
            foreach ($users as $user) :

            ?>
                <tr>
                    <td class="text-center"><?= $user['id'] ?></td>
                    <td class="text-center"><?= $user['name'] ?></td>
                    <td class="text-center"><?= $user['phone'] ?></td>
                    <td class="text-center"><?= $user['email'] ?></td>
                    <td class="text-center"><?= $user['address'] ?></td>
                    <td class="text-center"><?= $user['role'] ?></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a onclick="return confirm('Do you want to delete this product?')" href="controllers/staffs/delete_staff.controller.php?id=<?= $user['id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                            <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal" data-target="#modalUpdateStaff<?= $user['id'] ?>"></i>
                        </div>
                    </td>
                </tr>

                <!-- * Update Staff -->

                <div class="modal fade" id="modalUpdateStaff<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="d-flex justify-content-center modal-content">
                            <div class="card p-5">
                                <div>
                                    <h4 class="text-danger">Update Staff</h4>
                                    <hr>
                                </div>
                                <form action="controllers/staffs/update_staff.controller.php" class='d-flex flex-xl-column' method='post'>
                                    <input type="hidden" name="cas_id" value="<?= $user['id'] ?>">

                                    <div class="form-group">
                                        <label for="name">name:</label>
                                        <input type="text" class="form-control" id="name" name='name' value="<?= $user['name'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="number">number:</label>
                                        <input type="number" class="form-control" id="number" name='number' value="<?= $user['phone'] ?>">
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
        </tbody>
        <?php endforeach; ?>
    </table>
</div>

<!-- *create form staff -->

<div class="modal fade" id="modalsCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="d-flex justify-content-center modal-content" style="width: 700px;">
            <div class="row">
                <div class="col">
                    <div class="card shadow" style="width: 700px;">
                        <div class="modal-header border-0 text-primary text-center">
                            <h3 class="modal-title" id="exampleModalLabel">Data Of Staff</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <hr>
                        <div class="modal-body pl-5 pr-5">
                            <form action="../../controllers/staffs/create_staff.controller.php" class='d-flex flex-xl-column' method='post' enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Staff name:</label>
                                        <input type="text" class="form-control" id="name" name='name'>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="number">number phone:</label>
                                        <input type="number" class="form-control" id="number" name='number'>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="email">email:</label>
                                        <input type="text" class="form-control" id="email" name='email'>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password">password:</label>
                                        <input type="text" class="form-control" id="password" name='password'>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="address">address:</label>
                                        <input type="text" class="form-control" id="address" name='address'>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <select class="custom-select" name="roles" id="inputGroupSelect02">
                                            <option selected>Choose...</option>
                                            <option value="cashier">Cashier</option>
                                            <option value="stock manager">Stock Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group " style="width: 700px;">
                                        <label>Image</label>
                                        <input type="file" class="form-control" placeholder="Insert Image" name="imagestaff">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row ">
                                    <div class="col-md-6 w-100">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>