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
    <div class="alert alert-danger alert-dismissible fade show align-center" id="alert" style="width: 350px;">
        <div class="card-body px-lg-5 py-lg-5">
            <form action="">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?= $_SESSION['error'] ?>
            </form>
        </div>
    </div>
<?php
    unset($_SESSION['error']);
endif;
?>


<!-- Begin Page Content -->

<?php
// $products = null;
// // print_r($_SESSION['Products']);
// if ($_SESSION['Products'] != []) {
//     $products = $_SESSION['Products'];
// }  else {
//     $products = getItem();
// }
$products = getItem();
?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <h5 class="mt-2 ml-4 font-weight-bold text-primary mt-3">All Products</h5>

            <!-- //*button search -->

            <form action="#" method="post">
                <div class="card-header input-group-append w-200 ">
                    <select id="select-categories" class="border-primary text-primary rounded" name="users" style="padding: 6px;">
                        <option value="">selece category </option>
                        <?php
                        foreach ($categories as $category):
                            ?>
                            <option value="<?= $category['cate_name']; ?>">
                                <?= $category['cate_name']; ?>
                            </option>
                            <?php
                        endforeach;
                        ?>

                    </select>
                </div>

            </form>
            <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                <div class="card-header py-3 d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#myModal"><i
                            class="bi bi-plus-circle mr-3"></i>Create New Product
                    </button>
                </div>
            <?php endif; ?>
        </div>


        <script>

            document.getElementById('select-categories').addEventListener('change', (e) => {
                var products = document.querySelectorAll('#product');
                countCard = 0;
                products.forEach(product => {
                    var categories = document.getElementById('select-categories').value.toLocaleLowerCase();
                    var category = product.children[4].textContent.toLocaleLowerCase();
                    if (category.includes(categories) === true) {
                        product.style.display = '';
                        document.querySelector('.noData').style.display = 'none';
                    } else {
                        product.style.display = 'none';
                        countCard += 1;
                        if (countCard == products.length) {
                            document.querySelector('.noData').style.display = '';
                        }
                    }
                });
            });
            
        </script>

        <div class="card-body">
            <div class="table-responsive pr-3 pl-3">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
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
                        foreach ($products as $pro) :
                        ?>
                            <tr id="product">
                                <td>
                                    <?= $pro['pro_id'] ?>
                                </td>
                                <td><img width="50px" height="50px" style="object-fit: cover;" class="rounded-circle"
                                        src="assets/images/<?= $pro['pro_img'] ?>" alt=""></td>
                                <td>
                                    <?= $pro['pro_name']  ?>
                                </td>
                                <td>
                                    <?= $pro['pro_code'] ?>
                                </td>
                                <td>
                                    <?= $pro['cate_name'] ?>
                                </td>
                                <td>
                                    <?= $pro['pro_quantity'] ?>
                                </td>
                                <td>
                                    <?= $pro['pro_price'] ?>$
                                </td>
                                <td>
                                    <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                                        <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal"
                                            data-target="#exampleModalUpdate<?= $pro['pro_id'] ?>"></i>
                                    <?php endif; ?>

                                    <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                                        <a onclick="return confirm('Do you want to delete this product?')"
                                            href="../../controllers/items/delete_item.controller.php?id=<?= $pro['pro_id'] ?>"><i
                                                class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                                    <?php endif; ?>

                                    <i class="bi bi-eye-fill text-info btn btn-lg ml-1 " id="view_item" data-toggle="modal"
                                        data-target="#ModalView<?= $pro['pro_id'] ?>"></i>

                                </td>

                                <!-- popup view -->

                            </tr>
                            <div class="modal fade" id="ModalView<?= $pro['pro_id'] ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-danger" id="exampleModalLabel">Detail Product</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="assets/images/<?= $pro['pro_img'] ?>" alt="" width="100%"
                                                        height="auto">
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">ID:
                                                                <span class="text-danger">
                                                                    <?= $pro['pro_id'] ?>
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label text-dark">Name: <span
                                                                    class="text-danger">
                                                                    <?= $pro['pro_name'] ?>
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label text-dark">Code: <span
                                                                    class="text-danger">
                                                                    <?= $pro['pro_code'] ?>
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label text-dark">Category:<span
                                                                    class="text-danger">
                                                                    <?= $pro['cate_name'] ?>
                                                                </span></label>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label text-dark">Original price: <span
                                                                        class="text-danger">
                                                                        <?= $pro['pro_original_price'] ?>
                                                                    </span></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label text-dark">Quantity: <span
                                                                    class="text-danger">
                                                                    <?= $pro['pro_quantity'] ?>
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label text-dark">Price: <span
                                                                    class="text-danger">
                                                                    <?= $pro['pro_price'] ?>$
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label ">Supplier:
                                                                <span class="text-danger">
                                                                    <?= $pro['sup_name'] ?>
                                                                </span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label ">Date:
                                                                <span class="text-danger">
                                                                    <?= $pro['pro_date'] ?>
                                                                </span></label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- popup update  -->
                            <?php if ($_SESSION['user']['role'] != 'cashier') : ?>
                                <div class="modal fade" id="exampleModalUpdate<?= $pro['pro_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalUpdateTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title text-danger ml-4" id="exampleModalUpdateTitle">Update
                                                </h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="m-3 d-flex justify-content-center flex-column">
                                                    <form action="../../controllers/items/update_item.controller.php"
                                                        method="post" class="d-flex ml-5" enctype="multipart/form-data">
                                                        <input type="hidden" name="id" value="<?= $pro['pro_id'] ?>">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="pro_name">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $pro['pro_name'] ?>"
                                                                            placeholder="Enter Name" name="name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Code</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $pro['pro_code'] ?>"
                                                                            placeholder="Enter Code" name="code">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Category</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $pro['cate_name'] ?>"
                                                                            placeholder="Enter Category" name="category">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Original price</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $pro['pro_original_price'] ?>"
                                                                            placeholder="Enter Original Price"
                                                                            name="original_price">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Quantity</label>
                                                                        <input type="number" class="form-control"
                                                                            value="<?= $pro['pro_quantity'] ?>"
                                                                            placeholder="Enter Quantity" name="quantity">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input type="text" class="form-control"
                                                                            value="<?= $pro['pro_price'] ?>"
                                                                            placeholder="Enter Price" name="price">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group " style="width: 500px;">
                                                                    <label>Image</label>
                                                                    <input type="file" class="form-control"
                                                                        placeholder="Insert Image" value="<?= $pro['pro_img'] ?>" name="imageItem">
                                                                </div>
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
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <!-- <tr id="noData" >No has the produces of this category</tr> -->
                </table>
                <div class="noData" style="display: none;" >
                    <h2 class="text-center">No has the produces of this category</h2>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<!-- popup create product  -->


<?php if ($_SESSION['user']['role'] != 'cashier'): ?>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" style="width:580px; ">
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Form Create</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="../../controllers/items/create.controller.php" method="post" id="form-create" class="d-flex flex-xl-column p-3 ml-1" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class=" form-group mr-5">
                                <label for="pro_name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name">
                            </div>
                            <div class="form-group">
                                <label>supplier</label><br>
                                <select class="custom-select " id="inputGroupSelect01" name="supplier"
                                    style="width: 240px;">
                                    <option selected>Choose supplier...</option>
                                    <?php for ($i = 0; $i < count($suppliers); $i++): ?>
                                        <option value="<?= $suppliers[$i][0] ?>">
                                            <?= $suppliers[$i][0] ?>
                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row  mt-3">
                            <div class="form-group mr-5">
                                <label>Code</label>
                                <input type="text" class="form-control" placeholder="Enter Code" name="code">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="custom-select" id="inputGroupSelect01" name="category">
                                    <option selected>Choose category...</option>
                                    <?php for ($i = 0; $i < count($categories); $i++): ?>
                                </div>
                                <option value="<?= $categories[$i][0] ?>">
                                    <?= $categories[$i][0] ?>
                                </option>
                            <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group mr-5">
                                <label>Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name="price">
                            </div>
                            <div class="form-group" style="width: 240px;">
                                <label>Quantity</label>
                                <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
                            </div>
                            <div class="form-group" style="width: 240px;">
                                <label>Original price</label>
                                <input type="text" class="form-control" placeholder="Enter Original price"
                                    name="original_price">
                            </div>
                        </div>
                        <div class="form-row  mt-3">
                            <div class="form-group " style="width: 500px;">
                                <label>Image</label>
                                <input type="file" class="form-control" placeholder="Insert Image" name="image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-25 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php endif; ?>

