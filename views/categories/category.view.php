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
            <thead class=" text-secondary thead-light text-black-50" >
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
<<<<<<< HEAD
                                    <a href="/update_category?id=<?= $cate['cate_id'] ?>">
                                        <button class="btn btn-sm text-success"><h5><i class="bi bi-pencil-fill"></i></i></i></h5></button></a>
=======
                                    <a href="/update_category?id=<?= $cate['cate_name'] ?>">
                                        <button class="btn btn-sm btn-success"><i class="fa fa-pen"></i>Edite</button></a>
>>>>>>> e98b5ad9105a4f40eb6f812e41844ea2ec192765

                                    <a href="../../controllers/categories/delete_category.controller.php?id=<?= $cate['cate_id'] ?> " onclick="return functionDelete()">
                                        <button class="btn btn-sm text-danger ml-3"><h5><i class="bi bi-trash3-fill"></i></h5></button></a>

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
                                        <button class="btn btn-sm text-primary ml-3"><h5><i class="fa fa-eye"></h5></i></button></a>
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