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
    <div class="card-header border-0">
        <a href="/create_form_cate" class="btn btn-outline-primary ml-5">
            <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
            Make A New Category
        </a>
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

                    <tr>
                        <th><?= $cate['cate_id'] ?></th>
                        <th><?= $cate['cate_name'] ?></th>
                        <th><?= $cate['cate_date'] ?></th>
                        <th>
                            <div class="btn-group">
                                <div class="btn-group">

                                    <i class="bi bi-pencil-fill text-primary btn btn-sm ml-3" data-toggle="modal" data-target="#exampleModal<?= $cate['cate_id'] ?>"></i>
                                    <!-- <a href="/update_category?id=<?= $cate['cate_id'] ?>">
                                    <button class="btn btn-sm text-success">
                                        <h5><i class="bi bi-pencil-fill"></i></i></i></h5>
                                    </button>
                                </a> -->
                                    <a href="../../controllers/categories/delete_category.controller.php?id=<?= $cate['cate_id'] ?> " onclick="return functionDelete()">
                                        <button class="btn btn-sm text-danger ml-3">
                                           <i class="bi bi-trash3-fill"></i>
                                        </button></a>

                                    <script>
                                        function functionDelete() {
                                            if (confirm("Are you sure you want to delete this category?")) {

                                                return true;
                                            } else {
                                                return false;
                                            }
                                        }
                                    </script>

                                    <a href="/view_category?id=<?= $cate['cate_id'] ?>">
                                        <button class="btn btn-sm text-primary ml-3">
                                            <i class="fa fa-eye"></i>
                                        </button></a>

                                    <!-- popup update  -->

                                    <script>
                                        $('#exampleModal').on('show.bs.modal', function(event) {
                                            var button = $(event.relatedTarget) // Button that triggered the modal
                                            var recipient = button.data('whatever') // Extract info from data-* attributes
                                            var modal = $(this)
                                            modal.find('.modal-title').text('New message to ' + recipient)
                                            modal.find('.modal-body input').val(recipient)
                                        })
                                    </script>

                                    <div class="modal fade" id="exampleModal<?= $cate['cate_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Product</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="row">
                                                    <div class="container m-5 d-flex justify-content-center text-left ">
                                                        <form action="controllers/categories/update_category.controller.php" class="d-flex flex-xl-column" method="post">
                                                            <input type="hidden" name="id" value="<?= $cate['cate_id'] ?>">
                                                            <div class="form-group">
                                                                <label for="title" class="text-primary m-2">Create</label>
                                                                <input type="text" class="form-control" value="<?= $cate['cate_name'] ?>" name="category" placeholder="Category_name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment" class="text-primary m-2">Comment:</label>
                                                                <input type="text" class="form-control h-100" name='description' value="<?= $cate['cate_desc'] ?>" name="category" placeholder="Category_name">
                                                            </div>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="submit" class="btn btn-primary align-self-end mt-5">Update</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                    <!-- end  -->
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