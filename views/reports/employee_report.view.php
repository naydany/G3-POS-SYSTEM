<div class="container mt-4">
<div class="card-header d-flex justify-content-between">
    <h4 class="text-primary">Employee Reports</h4>
    <button class="btn btn-outline-primary" id="export_btn"><i class="bi bi-file-earmark-arrow-down"></i>
        Export Data
    </button>
</div>
        <table class="table table-bordered text-center" id = "employee_data">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function export_table_data_to_excel(type) {
        var data = document.getElementById("employee_data");
        var file = XLSX.utils.table_to_book(data, {
            sheet: "sheet1"
        });
        XLSX.writeFile(file, 'file.' + type);
    }
    const export_button = document.getElementById("export_btn");
    export_button.addEventListener('click', () => {
        export_table_data_to_excel('xlsx');
    });
</script>
</div>