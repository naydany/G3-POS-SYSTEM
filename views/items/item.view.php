<!-- Begin Page Content -->

<<<<<<< HEAD
=======

>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <h5 class="mt-2 ml-4 font-weight-bold text-primary">Items</h5>

            <div class="card-header py-3 d-flex justify-content-between">
                <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#myModal"><i class="bi bi-plus-circle mr-3"></i>
                    Create New Product
                </button>
            </div>

        </div>
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
<<<<<<< HEAD
                        require "database/database.php";
                        require "models/item.model.php";
=======


>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
                        $products = getItem();
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
<<<<<<< HEAD
=======

>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
                                    <a onclick="return confirm('Do you want to delete this product?')" href="../../controllers/items/delete_item.controller.php?id=<?= $pro['pro_id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-3"></i></a>

                                    <i class="bi bi-pencil-fill text-success btn btn-lg ml-3" data-toggle="modal" data-target="#exampleModalUpdate<?= $pro['pro_id'] ?>"></i>

                                    <i class="bi bi-eye-fill text-info btn btn-lg ml-3 " id="view_item" data-toggle="modal" data-target="#ModalView<?= $pro['pro_id'] ?>"></i>

                                </td>

                                <!-- popup view -->

<<<<<<< HEAD
                                <style>
                                    .view_item {
                                        display: none;
                                        /* position: fixed; */
                                        /* z-index: 8;
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                        height: 100%;
                                        overflow: auto;
                                        background-color: rgb(0, 0, 0);
                                        background-color: rgba(0, 0, 0, 0.4); */
                                    }
                                </style>

                                <script>
                                    const pop_view = document.querySelector('#view_item');
                                    const start_pop_view = document.querySelector('.view_item');

                                    function closeView() {
                                        start_pop_view.style.display = 'none';
                                    }
                                </script>
                                to night I will 

                                <script>
                                    $('#exampleModal').on('show.bs.modal', function(event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                    })
                                </script>
=======
>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
                            </tr>
                            <div class="modal fade" id="ModalView<?= $pro['pro_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <img src="assets/images/<?= $pro['pro_img'] ?>" alt="" width="100%" height="auto" class="">
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">ID: <span class="text-danger"><?= $pro['pro_id'] ?></span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">Name: <span class="text-danger"><?= $pro['pro_name'] ?></span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">Code: <span class="text-danger"><?= $pro['pro_code'] ?></span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">Category:<span class="text-danger"> <?= $pro['cate_name'] ?></span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">Quantity: <span class="text-danger"><?= $pro['pro_quantity'] ?></span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label text-dark">Price: <span class="text-danger"><?= $pro['pro_price'] ?>$</span></label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label ">Supplier: <span class="text-danger"><?= $pro['sup_name'] ?></span></label>
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
                                            <h3 class="modal-title text-danger ml-4" id="exampleModalUpdateTitle">Update</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="m-3 d-flex justify-content-center flex-column">
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
                            <!-- !test -->
                            <style>
                                .create_item {
                                    /* display: none; */
                                    position: fixed;
                                    z-index: 8;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    overflow: auto;
                                    background-color: rgb(0, 0, 0);
                                    background-color: rgba(0, 0, 0, 0.4);

                                }
                                form {
                                    box-shadow: 0 3px 5px #f5f5f5;
                                    background: #eee;
                                }
                                .modal_dialog {
                                    position: absolute;
                                    z-index: 3;
                                }
                            </style>
                            <script>
                                const pop = document.querySelector('.create_item');
                                const open_pop = document.querySelector('#create_item');

                                function openForm() {
                                    document.querySelector(".create_item").style.display = "block";
                                }

                                function closeForm() {
                                    document.querySelector(".create_item").style.display = "none";
                                }
                            </script>

                            <!-- popup create product  -->
                            <?php
                            $categories = countNameCategory();
                            $suppliers = countNameSuppliers();
                            ?>
                            <div class="modal create_item" id="exampleIteams" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" class="border border-danger" role="document">
                                    <div class="modal-content rounded-top" style="width: 600px;">
                                        <div class="modal-header">
                                            <h3 class="modal-title text-danger text-bold ml-4" id="exampleModalLabel">Form create</h3>
                                            <button type="button" onclick="closeForm()" class="close_item" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="m-2 d-flex flex-colum container justify-content-center">
                                            <div class="card-body">
                                                <form action="../../controllers/items/create.controller.php" method="post" class="d-flex flex-xl-column" enctype="multipart/form-data">
                                                    <!-- <input type="hidden" name="id" onclick="closeForm()" class="close_item"> -->
                                                    <!-- <div class=" div-1 w-400 " > -->
                                                    <div class="form-row">

                                                        <div class=" form-group mr-5">
                                                            <label for="pro_name">Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>supplier</label><br>
                                                            <select class="custom-select " id="inputGroupSelect01" name="supplier" style="width: 240px;">
                                                                <option selected>Choose supplier...</option>
                                                                <?php for ($i = 0; $i < count($suppliers); $i++) : ?>
                                                                    <option value="<?= $suppliers[$i][0] ?>"><?= $suppliers[$i][0] ?></option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row  mt-3">
                                                        <div class="form-group mr-5">
                                                            <label>Code</label>
                                                            <input type="number" class="form-control" placeholder="Enter Code" name="code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                                                <option selected>Choose category...</option>
                                                                <?php for ($i = 0; $i < count($categories); $i++) : ?>
                                                                    <option value="<?= $categories[$i][0] ?>"><?= $categories[$i][0] ?></option>
                                                                <?php endfor; ?>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-row  mt-3">
                                                        <div class="form-group mr-5">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control" placeholder="Enter Price" name="price">
                                                        </div>
                                                        <div class="form-group" style="width: 240px;">
                                                            <label>Quantity</label>
                                                            <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
                                                        </div>
                                                    </div>

                                                    <div class="form-row  mt-3">
                                                        <div class="form-group " style="width: 500px;">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" placeholder="Insert Image" name="image">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary w-25 mt-3">Submit</button>
                                                    <!-- </div> -->
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end  -->
=======
>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>

<!-- popup create product  -->
<!-- /.container-fluid -->
<<<<<<< HEAD
<?php require "layouts/footer.php" ?>
=======
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 580px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-danger">Form Create</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body d-flex justify-content-center">
                <form action="../../controllers/items/create.controller.php" method="post" class="d-flex flex-xl-column" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class=" form-group mr-5">
                            <label for="pro_name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>
                        <div class="form-group">
                            <label>supplier</label><br>
                            <select class="custom-select " id="inputGroupSelect01" name="supplier" style="width: 240px;">
                                <option selected>Choose supplier...</option>
                                <?php for ($i = 0; $i < count($suppliers); $i++) : ?>
                                    <option value="<?= $suppliers[$i][0] ?>"><?= $suppliers[$i][0] ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row  mt-3">
                        <div class="form-group mr-5">
                            <label>Code</label>
                            <input type="number" class="form-control" placeholder="Enter Code" name="code">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                <option selected>Choose category...</option>
                                <?php for ($i = 0; $i < count($categories); $i++) : ?>
                        </div>
                        <option value="<?= $categories[$i][0] ?>"><?= $categories[$i][0] ?></option>
                    <?php endfor; ?>
                    </select>

                    </div>
            </div>

            <div class="form-row  mt-3">
                <div class="form-group mr-5">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter Price" name="price">
                </div>
                <div class="form-group" style="width: 240px;">
                    <label>Quantity</label>
                    <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity">
                </div>
            </div>

            <div class="form-row  mt-3">

                <div class="form-group " style="width: 500px;">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="Insert Image" name="image">
                </div>
            </div>



            <button type="submit" class="btn btn-primary w-25 mt-3 md-5">Submit</button>
            <!-- </div> -->
            </form>
        </div>
    </div>

</div>



>>>>>>> bd9740e123c314ca67539badf790ec25a1be6998
