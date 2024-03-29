
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


<div class="card-header pl-5 pr-5 py-3 d-flex justify-content-between">
    <h4 class="font-weight-bold text-primary" style="margin-left: 68px">Category</h4>
    <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
        <div class="" style="padding-right: 65px;">
            <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#medalCreate">
                <i class="bi bi-plus-circle mr-2"></i>Add new Category
            </button>
        </div>
    <?php endif; ?>
</div>


<div class="container mt-3">
    <table class="table table-bordered text-center mt-2 rounded">
        <thead class=" text-secondary thead-light text-black-50">
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Create Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-secondary">
            <?php

            $cates = getCategory();
            foreach ($cates as $cate):
                ?>

                <!-- popup update  -->
                <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                    <div class="modal fade" id="exampleModal<?= $cate['cate_id'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger ml-3" id="exampleModalLabel">Edit Categry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="m-5 d-flex justify-content-center flex-column">
                                    <form action="controllers/categories/update_category.controller.php"
                                        class="d-flex flex-xl-column" method="post">
                                        <input type="hidden" name="id" value="<?= $cate['cate_id'] ?>">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" value="<?= $cate['cate_name'] ?>"
                                                name="category" placeholder="Category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Description</label>
                                            <input type="text" class="form-control" value="<?= $cate['cate_desc'] ?>"
                                                name="description" placeholder="Category_name">
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

                <!-- popup detail  -->

                <div class="modal fade" id="exampleModals<?= $cate['cate_id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel">View Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php $counts = countProductInCategory($cate['cate_name']);

                                $numberOfproduct = 0;
                                foreach ($counts as $count) {
                                    $numberOfproduct += 1;
                                } ?>
                                <form action="../../controllers/items/create.controller.php" class="d-flex flex-xl-column"
                                    method="post">
                                    <div class="table-responsive">
                                        <div class="form-group">
                                            <span class="text-dark mr-3">ID: </span><span class="text-danger">
                                                <?= $cate['cate_id'] ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="text-dark mr-3">Name: </span><span class="text-danger">
                                                <?= $cate['cate_name'] ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="text-dark mr-3">Cate Date: </span><span class="text-danger">
                                                <?= $cate['cate_date'] ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="text-dark mr-3">Products :</span><span class="text-danger">
                                                <?php echo $numberOfproduct; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="text-primary mr-3">Descriptionn: </span> <span class="text-danger">
                                        <?= $cate['cate_desc'] ?>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end  -->
                <tr>
                    <td>
                        <?= $cate['cate_id'] ?>
                    </td>
                    <td>
                        <?= $cate['cate_name'] ?>
                    </td>
                    <td>
                        <?= $cate['cate_date'] ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <div class="btn-group">

                                <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                                    <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal"
                                        data-target="#exampleModal<?= $cate['cate_id'] ?>"></i>
                                <?php endif; ?>
                                <?php if ($_SESSION['user']['role'] != 'cashier'): ?>
                                    <a href="../../controllers/categories/delete_category.controller.php?id=<?= $cate['cate_id'] ?> "
                                        onclick="return confirm('Do you want to delete this product?')">
                                        <i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                                <?php endif; ?>
                                <i class="bi bi-eye-fill text-info btn btn-lg ml-1" data-toggle="modal"
                                    data-target="#exampleModals<?= $cate['cate_id'] ?>"></i>

                            </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!-- popup create  -->
<?php if ($_SESSION['user']['role'] != 'cashier'): ?>
    <div class="modal fade" id="medalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="controllers/categories/create_category.controller.php" class="d-flex flex-xl-column"
                    method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title" class="text-primary m-2">Name</label>
                            <input type="text" class="form-control" name="category" placeholder="Cate name">
                        </div>
                        <div class="form-group">
                            <label for="comment" class="text-primary m-2">Comment</label>
                            <input type="text" class="form-control" name="description" placeholder="comment Cate ">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php endif; ?>
