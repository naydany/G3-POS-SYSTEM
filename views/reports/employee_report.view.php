<div class="container mt-3">
    <table class="table table-bordered text-center mt-2 rounded">
        <h4 class="m-5 text-primary">Employee Report</h4>
        <thead class="text-secondary thead-light">
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require 'models/staff.model.php';
        $users = getstaffs();
            foreach ($users as $user) :
        ?>      
            <tr>
                <td class="text-center"><?= $user['id'] ?></td>
                <td class="text-center"><?= $user['name'] ?></td>
                <td class="text-center"><?= $user['role'] ?></td>
                <td class="text-center"><?= $user['email'] ?></td>
                <td class="text-center"><?= $user['address'] ?></td>
                <td class="text-center"><?= $user['phone'] ?></td>
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