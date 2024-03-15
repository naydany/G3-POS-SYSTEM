
<div class="card-header py-3 d-flex justify-content-between">
    <h5 class="mt-2 ml-4 font-weight-bold text-primary">Supplier</h5>
    <div class="card-header d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_suppliers"><i class="bi bi-person-plus-fill"></i> Add New Supplier</button>
    </div>
</div>
<div class="container mt-3">
    <table class="table table-bordered text-center mt-2 rounded">
        <thead class="text-secondary thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
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
                    <td>
                        <div class="btn-group">
                            <a onclick="return confirm('Do you want to delete this product?')" href="controllers/suppliers/delete_supplier.controller.php?id=<?= $supplier['sup_id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>                           
                            <i class="bi bi-pencil-fill text-success btn btn-lg ml-3" data-toggle="modal" data-target="#update_suppliers<?= $supplier['sup_id'] ?>"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
            <!-- update supplier -->
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
            <!-- end update  -->
        <?php endforeach; ?>
    </table>
</div>
<!-- create_suppliers -->
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
<!-- endof  -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
