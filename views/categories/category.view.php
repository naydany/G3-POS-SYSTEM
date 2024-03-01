<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

    </style>
    <title>Category</title>
</head>

<body>

    <div class="card-header py-3 d-flex justify-content-between">
        <h5 class="m-0 font-weight-bold text-primary">Category</h5>
        <a href="/create_form_cate" class="btn btn-outline-primary ml-5">
            <i class="bi bi-plus-circle mr-2"></i>Make A New Category</a>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class=" text-secondary thead-light text-black-50">
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-secondary">
                <?php
                $cates = getCategory();
                foreach ($cates as $cate) :
                ?>

                    <!-- popup update  -->

                    <div class="modal fade" id="exampleModal<?= $cate['cate_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Categry</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div class="m-5 d-flex justify-content-center flex-column">
                                    <form action="controllers/categories/update_category.controller.php" class="d-flex flex-xl-column" method="post">
                                    <input type="hidden" name="id" value="<?= $cate['cate_id'] ?>">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" value="<?= $cate['cate_name'] ?>" name="category" placeholder="Category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Description</label>
                                            <input type="text" class="form-control" value="<?= $cate['cate_desc'] ?>" name="description" placeholder="Category_name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end  -->
                    <tr>
                        <th><?= $cate['cate_id'] ?></th>
                        <th><?= $cate['cate_name'] ?></th>
                        <th><?= $cate['cate_date'] ?></th>
                        <th>
                            <div class="btn-group">
                                <div class="btn-group">

                                    <i class="bi bi-pencil-square text-success btn btn-lg ml-1" data-toggle="modal" data-target="#exampleModal<?= $cate['cate_id'] ?>"></i>

                                    <!-- <a href="/update_category?id=<?= $cate['cate_id'] ?>">
                                    <button class="btn btn-sm text-success">
                                        <h5><i class="bi bi-pencil-fill"></i></i></i></h5>
                                    </button>
                                </a> -->
                                    <a href="../../controllers/categories/delete_category.controller.php?id=<?= $cate['cate_id'] ?> " onclick="return confirm('Do you want to delete this product?')">
                                        <i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>

                                    <a href="/view_category?id=<?= $cate['cate_id'] ?>">
                                        <i class="bi bi-question-circle text-info btn btn-lg ml-1"></i></a>

                                </div>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>