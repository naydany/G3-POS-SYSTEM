<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Admin</title>
</head>
<body>

<div class="container mt-4">
    <a href="/form_admin" class="btn btn-outline-primary" id="addAdminBtn"> <i class="fas fa-user-plus"></i> Add new admin</a>
</div>

<div class="container mt-4">
    <table class="table" style="font-size: 14px; text-align: center;">
        <thead class="bg-primary text-white thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $admins = getAdmin();
            foreach ($admins as $admin) :
        ?>
            <tr>
                <td><?= $admin['id'] ?></td>
                <td><?= $admin['name'] ?></td>
                <td><?= $admin['email'] ?></td>
                <td><?= $admin['address'] ?></td>
                <td>
                    <div class="btn-group">
                        <a onclick="return confirm('Do you want to delete this product?')" href="controllers/admin/delete_admin.controller.php?id=<?=$admin['id']?>"><i class="bi bi-trash3 text-danger btn btn-lg ml-1"></i></a>
                        <a href="/update_admin?id=<?=$admin['id']?>"><i class="bi bi-pencil-square text-success btn btn-lg ml-1"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

