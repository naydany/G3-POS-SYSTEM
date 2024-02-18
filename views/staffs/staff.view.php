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
<<<<<<< HEAD
    <button class="btn btn-outline-primary"><i class="fas fa-user-plus"></i> Add new staff</button>
</div>

<div class="container mt-4">
    <table class="table" style = "font-size: 15px">
=======
    <a href="/create_staffs" class="btn btn-outline-primary"> <i class="fas fa-user-plus"></i> Add new staff</a>
</div>

<div class="container mt-4">
    <table class="table" style = "font-size: 14px">
>>>>>>> 7ecd8b4c9dcc7ad4d24bd177c6b10712d7632252
        <thead class="bg-primary text-white">
            <tr>
                <th class="text-center">Staff ID</th>
                <th class="text-center">Staff name</th>
                <th class="text-center">Staff number</th>
                <th class="text-center">Staff emial</th>
                <th class="text-center">Date</th>
                <th class="text-center">Staff address</th>
                <th class="text-center">Role ID</th>
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
                <td class="text-center">1</td>
                <td class="text-center">
                    <div class="btn-group">
<<<<<<< HEAD
                        <button class="btn btn-danger" onclick="deleteStaff(1)" style = "font-size: 12px"><i class="fas fa-trash"></i> Delete</button>
                        <button class="btn btn-success" onclick="updateStaff(1)" style = "font-size: 12px"><i class="fas fa-edit"></i> Update</button>
=======
                        <button class="btn btn-sm btn-success" onclick="deleteStaff(1)"  style = "font-size: 10px"><i class="fas fa-trash"></i> Delete</button>
                        <button class="btn btn-sm btn-danger ml-3" onclick="updateStaff(1)"  style = "font-size: 10px"><i class="fas fa-edit"></i> Update</button>
>>>>>>> 7ecd8b4c9dcc7ad4d24bd177c6b10712d7632252
                    </div>
                </td>
            </tr> 
        </tbody>
        <tbody>
<<<<<<< HEAD
            <tr>
                <td class="text-center">002</td>
                <td class="text-center">channy</td>
                <td class="text-center">20</td>
                <td class="text-center">channy.@gmail.com</td>
                <td class="text-center">18/02/2024</td>
                <td class="text-center">STREET 2004 SORLA</td>
                <td class="text-center">2</td>
                <td class="text-center">
                    <div class="btn-group">
                        <button class="btn btn-danger" onclick="deleteStaff(2)"  style = "font-size: 12px"><i class="fas fa-trash"></i> Delete</button>
                        <button class="btn btn-success" onclick="updateStaff(2)"  style = "font-size: 12px"><i class="fas fa-edit"></i> Update</button>
                    </div>
                </td>
            </tr>
=======
            <?php endforeach; ?>
>>>>>>> 7ecd8b4c9dcc7ad4d24bd177c6b10712d7632252
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
