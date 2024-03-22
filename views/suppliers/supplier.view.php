


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



<div class="card-header py-3 d-flex justify-content-between">
    <h5 class="mt-2 font-weight-bold text-primary" style="margin-left: 7%;">Supplier</h5>
    <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
        <div class="card-header d-flex justify-content-between">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_suppliers"><i class="bi bi-person-plus-fill"></i> Add New Supplier</button>
        </div>
    <?php endif; ?>
</div>
<div class="container">
    <table class="table table-bordered text-center rounded">
        <thead class="text-secondary thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
                    <th>Action</th>
                <?php endif; ?>
            </tr>
        </thead>
        <?php
        $suppliers = getSuppliers();
        foreach ($suppliers as $supplier) :
        ?>
            <tbody>
                <tr>
                    <td><?= $supplier['sup_id'] ?></td>
                    <td><?= $supplier['sup_name'] ?></td>
                    <td><?= $supplier['phone'] ?></td>
                    <td><?= $supplier['sup_address'] ?></td>
                    <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
                        <td>
                            <div class="btn-group">

                                <a onclick="return confirm('Do you want to delete this product?')" href="controllers/suppliers/delete_supplier.controller.php?id=<?= $supplier['sup_id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>

                                <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal" data-target="#update_suppliers<?= $supplier['sup_id'] ?>"></i>
                            </div>
                        </td>
                    <?php endif ?>

                </tr>
            </tbody>
            <!-- update supplier -->

            <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
                <div class="modal fade" id="update_suppliers<?= $supplier['sup_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="controllers/suppliers/update_supplier.controller.php" class='d-flex flex-xl-column' method='post'>
                                    <input type="hidden" name="sup_id" value="<?= $supplier['sup_id'] ?>">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name='name' value="<?= $supplier['sup_name'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phone" name='phone' value="<?= $supplier['phone'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name='address' value="<?= $supplier['sup_address'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- end update  -->
        <?php endforeach; ?>
    </table>
</div>

<!-- create_suppliers -->
<?php if ($_SESSION['user']['role'] != 'cashier') : ?>

    <div class="modal fade" id="create_suppliers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="controllers/suppliers/add_supplier.controller.php" class='d-flex flex-xl-column' method='post'>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name='name'>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone" name='phone'>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name='address'>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- endof  -->