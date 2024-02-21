<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* .btn-success {
            margin-right: 30px;
        } */
    </style>
    <title>Category</title>
</head>

<body>
    <div class="card-header border-0">
        <a href="/create_form_cate" class="btn btn-outline-primary">
            <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
            Make A New Order
        </a>
    </div>

    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class=" text-secondary thead-light">
                <tr>
                    <th>Cate Id</th>
                    <th>Cate Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="light">
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
                                <a  href="/update_category?id=<?= $cate['cate_id'] ?>">
                                <button class="btn btn-sm btn-success"><i class="fa fa-pen"></i>Edite</button></a>

                                <a href="../../controllers/categories/delete_category.controller.php?id=<?= $cate['cate_id'] ?>">
                                <button class="btn btn-sm btn-danger ml-3"><i class="fa fa-trash"></i>Delete</button></a>

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