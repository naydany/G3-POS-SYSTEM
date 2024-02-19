<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Products</h6>
            <a href="/form_create_pro" class="btn btn-primary">Create Product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Pro_ID</th>
                            <th>Pro_Name</th>
                            <th>Pro_Code</th>
                            <th>Pro_Image</th>
                            <th>Pro_Desc</th>
                            <th>Pro_Price</th>
                            <th>Pro_Date</th>
                            <th>Supplier_ID</th>
                            <th>Cate_ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require './models/item.model.php';
                        $products = getItem();
                        foreach ($products as $product) :
                        ?>
                            <tr>
                                <td><?= $product['pro_id'] ?></td>
                                <td><?= $product['pro_name'] ?></td>
                                <td><?= $product['pro_code'] ?></td>
                                <td><?= $product['pro_img'] ?></t>
                                <td><?= $product['pro_desc'] ?></td>
                                <td><?= $product['pro_price'] ?></td>
                                <td><?= $product['pro_date'] ?></td>
                                <td>4</td>
                                <td>2</td>
                                <td class="d-flex">
                                    <a href="#" class="btn btn-danger">Delete</a>
                                    <a href="#" class="btn btn-primary ml-3">Update</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<!-- /.container-fluid -->