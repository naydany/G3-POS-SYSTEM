<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
<<<<<<< HEAD
        <div class="card-header py-3 d-flex justify-content-between">
            <h5 class="m-0 font-weight-bold text-primary">Products</h5>
            <a href="/form_create" class="btn btn-outline-primary"><i class="bi bi-file-plus-fill mr-3"></i></i>Create New Product</i></a>
=======
        <div class="card-header d-flex justify-content-between">
            <h5 class="mt-4 ml-4 font-weight-bold text-primary">Items</h5>

            <!-- <i class="bi bi-pencil-square text-success btn btn-lg ml-3" data-toggle="modal" data-target="#exampleModalUpdate<?= $pro['pro_id'] ?>"></i> -->

            <div class="card-header py-3 d-flex justify-content-between">
                <a href="/form_create" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModals" data-whatever="@getbootstrap"><i class="bi bi-plus-circle mr-3"></i></i>Create New Product</i></a>
            </div>

>>>>>>> search_supplier
        </div>
        <div class="card-body">
            <div class="table-responsive pr-3 pl-3">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require "database/database.php";
                        require "models/item.model.php";

                        $products = getItem();
                        // print_r($products);
                        foreach ($products as $pro) :
                        ?>
                            <tr>
                                <td><?= $pro['pro_id'] ?></td>
                                <td><img width="50px" height="50px" style="object-fit: cover;" class="rounded-circle" src="assets/images/<?= $pro['pro_img'] ?>" alt=""></td>
                                <td><?= $pro['pro_name'] ?></td>
                                <td><?= $pro['pro_code'] ?></td>
                                <td><?= $pro['cate_name'] ?></td>
                                <td><?= $pro['pro_quantity'] ?></td>
                                <td><?= $pro['pro_price'] ?>$</td>

                                <td>
                                    <!-- <a href="/update_item" class="btn btn-sm btn-success ml-3"><i class="bi bi-pencil-square"></i>Update</a> -->
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalUpdate">Update</button> -->
                                    <a onclick="return confirm('Do you want to delete this product?')" href="../../controllers/items/delete_item.controller.php?id=<?= $pro['pro_id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-3"></i></a>
                                    
                                    <i class="bi bi-pencil-fill text-success btn btn-lg ml-3" data-toggle="modal" data-target="#exampleModalUpdate<?= $pro['pro_id'] ?>"></i>

                                    <i class="bi bi-eye-fill text-info btn btn-lg ml-3" data-toggle="modal" data-target="#exampleModal<?= $pro['pro_id'] ?>"></i>

                                </td>

                                <!-- popup view -->
                                <script>
                                    $('#exampleModal').on('show.bs.modal', function(event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                    })
                                </script>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $pro['pro_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="assets/images/<?= $pro['pro_img'] ?>" alt="" width="100%" height="auto" class="">
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">ID: <?= $pro['pro_id'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Name: <?= $pro['pro_name'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Code: <?= $pro['pro_code'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Category: <?= $pro['cate_name'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Quantity: <?= $pro['pro_quantity'] ?></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Price: <?= $pro['pro_price'] ?>$</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Supplier: <?= $pro['sup_name'] ?></label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- popup update  -->

                            <div class="modal fade" id="exampleModalUpdate<?= $pro['pro_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalUpdateTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalUpdateTitle">Update</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="m-5 d-flex justify-content-center flex-column">
                                                <form action="controllers/items/update_item.controller.php" method="post" class="d-flex ml-5">
                                                    <input type="hidden" name="id" value="<?= $pro['pro_id'] ?>">
                                                    <div class=" div-1 w-200">
                                                        <div class=" form-group ">
                                                            <label for="pro_name">Name</label>
                                                            <input type="text" class="form-control w-100" value="<?= $pro['pro_name'] ?>" placeholder="Enter Name" name="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Code</label>
                                                            <input type="text" class="form-control" value="<?= $pro['pro_code'] ?>" placeholder="Enter Code" name="code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quantity</label>
                                                            <input type="number" class="form-control" value="<?= $pro['pro_quantity'] ?>" placeholder="Enter Quantity" name="quantity">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control" value="<?= $pro['pro_price'] ?>" placeholder="Enter Price" name="price">
                                                        </div>
                                                    </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
=======


                            <!-- popup create product  -->

                            <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="m-5 d-flex justify-content-center flex-column">
                                            <form action="../../controllers/items/create.controller.php" method="post" class="d-flex ml-5" enctype="multipart/form-data">
                                                <input type="hidden" name="id">
                                                <div class=" div-1 w-200">
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" placeholder="Insert Image" name="image">
                                                    </div>
                                                    <div class=" form-group">
                                                        <label for="pro_name">Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Code</label>
                                                        <input type="number" class="form-control" placeholder="Enter Code" name="code">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <input type="text" class="form-control" placeholder="Enter Category" name="category">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Quantity</label>
                                                        <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Supplier</label>
                                                        <input type="text" class="form-control" placeholder="Enter Quantity" name="supplier">
                                                    </div>

                                                </div>

                                                <button type="submit" class="btn btn-primary w-25">Submit</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

>>>>>>> search_supplier
                            <!-- end  -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require "layouts/footer.php"?>
<!-- /.container-fluid -->