<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Staffs</title>
</head>
<body>

<div class="container mt-4">
    <a href="/create_staffs" class="btn btn-outline-primary"> <i class="fas fa-user-plus"></i> Add new staff</a>
</div>

<div class="container mt-4">
    <table class="table" style = "font-size: 14px">
        <thead class="bg-primary text-white thead-light">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">name</th>
                <th class="text-center">number</th>
                <th class="text-center">emial</th>
                <th class="text-center">Date</th>
                <th class="text-center">address</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $staffs = getstaffs();
            foreach ($staffs as $staff) :
        ?>
            <tr>
                <td class="text-center"><?= $staff['cas_id'] ?></td>
                <td class="text-center"><?= $staff['cas_name'] ?></td>
                <td class="text-center"><?= $staff['cas_number'] ?></td>
                <td class="text-center"><?= $staff['cas_email'] ?></td>
                <td class="text-center"><?= $staff['date'] ?></td>
                <td class="text-center"><?= $staff['staff_addres'] ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="controllers/staffs/delete_staff.controller.php?id=<?=$staff['cas_id']?>"><button class="btn btn-sm btn-danger" onclick="deleteStaff(1)"style = "font-size: 12px"><i class="fas fa-trash"></i> Delete</button></a>
                        <a href="/update_staff?id=<?=$staff['cas_id']?>"><button class="btn btn-sm btn-success ml-3" onclick="updateStaff(1)"style = "font-size: 12px"><i class="fas fa-edit"></i> Update</button></a>
                    </div>
                </td>
            </tr> 
        </tbody>
        <tbody>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
