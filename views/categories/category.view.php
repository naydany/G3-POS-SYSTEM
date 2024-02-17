<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

    </style>
    <title>catecory</title>
</head>

<body>
    <div class="card-header border-0">
        <a href="/create_form_cate" class="btn btn-outline-primary">
            <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
            Make A New Category
        </a>
    </div>
    <div class="container mt-3 ">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Cate Id</th>
                    <th>Cate Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cates = getCategory();
                foreach ($cates as $cate) :
                ?>
                    <tr>
                        <td><?= $cate['cate_id'] ?></td>
                        <td> <?= $cate['cate_name'] ?></td>
                        <td><?= $cate['cate_date'] ?></td>
                        <td>
                            <div class="btn-group">

                                <a href="">
                                    <button class="btn btn-sm btn-success ">
                                        <i class="fa fa-pen"></i>
                                        Edite
                                    </button>
                                </a>

                                <a href="">
                                    <button class="btn btn-sm btn-danger ml-3">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>