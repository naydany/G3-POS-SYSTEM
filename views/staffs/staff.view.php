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
    <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add new staff</button>
</div>

<div class="container mt-4">
    <table class="table">
        <thead class="bg-primary text-white">
            <tr>
                <th class="text-center">STAFF ID</th>
                <th class="text-center">STAFF NAME</th>
                <th class="text-center">STAFF NUMBER</th>
                <th class="text-center">STAFF EMAIL</th>
                <th class="text-center">DATE</th>
                <th class="text-center">STAFF ADDRESS</th>
                <th class="text-center">ROLE ID</th>
                <th class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Replace this with data from your database
                $staffData = array(
                    array("001", "Nyny", "19", "ny.@gmail.com", "17/02/2024", "STREET 2004 SORLA", "1"),
                    array("002", "channy", "20", "channy.@gmail.com", "18/02/2024", "STREET 2004 SORLA", "2")
                );

                foreach ($staffData as $staff) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $staff[0] . "</td>";
                    echo "<td class='text-center'>" . $staff[1] . "</td>";
                    echo "<td class='text-center'>" . $staff[2] . "</td>";
                    echo "<td class='text-center'>" . $staff[3] . "</td>";
                    echo "<td class='text-center'>" . $staff[4] . "</td>";
                    echo "<td class='text-center'>" . $staff[5] . "</td>";
                    echo "<td class='text-center'>" . $staff[6] . "</td>";
                    echo "<td class='text-center'>";
                    echo "<div class='btn-group'>";
                    echo "<a href='delete.php?staff_id=" . $staff[0] . "' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a>";
                    echo "<a href='update.php?staff_id=" . $staff[0] . "' class='btn btn-warning'><i class='fas fa-edit'></i> Update</a>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
