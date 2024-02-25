
<?php
// $tests = countNameCategory();

// var_dump($tests);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <h5 class="m-0 font-weight-bold text-primary">Products</h5>
            <a href="/form_create" class="btn btn-outline-primary"><i class="bi bi-file-plus-fill mr-3"></i></i>Create New Product</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                                <td><img width="50px" height="50px" class="rounded-circle" src="assets/images/<?= $pro['pro_img'] ?>" alt=""></td>
                                <td><?= $pro['pro_name'] ?></td>
                                <td><?= $pro['pro_code'] ?></td>
                                <td><?= $pro['cate_name'] ?></td>
                                <td><?= $pro['pro_quantity'] ?></td>
                                <td><?= $pro['pro_price'] ?>$</td>
                               
                                <td>
                                    <a href="/update_item?id=<?= $pro['pro_id'] ?>" class="btn btn-sm btn-success ml-3"><i class="bi bi-pencil-square"></i>Update</a>
                                    <a onclick="return confirm('Do you want to delete this product?')" href="../../controllers/items/delete_item.controller.php?id=<?= $pro['pro_id'] ?>" class="btn btn-sm btn-danger ml-3"><i class="bi bi-trash"></i>Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->