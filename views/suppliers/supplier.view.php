<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>order</title>
</head> -->

<!-- <body> -->
<div class="container mt-4">
    <a href="/create_suppliers" class="btn btn-outline-primary"> <i class="fas fa-user-plus"></i> Add new supplier</a>
</div>
<div class="container mt-3">
    <table class="table table-bordered text-center mt-2 rounded">
        <thead class="text-secondary thead-light">
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th> phone</th>
                <th> Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php

        $suppliers = getSuppliers();
        foreach ($suppliers as $supplier) :
        ?>
            <tbody>
                <tr>
                    <td><?= $supplier['sup_id'] ?></td>
                    <td><?= $supplier['sup_name'] ?></td>
                    <td><?= $supplier['phone'] ?></td>
                    <td><?= $supplier['sup_address'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a onclick="return confirm('Do you want to delete this product?')" href="controllers/suppliers/delete_supplier.controller.php?id=<?= $supplier['sup_id'] ?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                            <a href="/update_supplier?id=<?= $supplier['sup_id'] ?>"><i class="bi bi-pencil-square text-success btn btn-lg ml-1"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html> -->