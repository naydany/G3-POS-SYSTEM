<div class="container mt-3">
    <div class="card-header d-flex justify-content-between">
        <h4 class=" text-primary">Payments Reports</h4>
        <button class="btn btn-outline-primary h-50 " id="export_button"><i class="bi bi-file-earmark-arrow-down"></i>
            Export Data
        </button>
    </div>
    <table class="table table-bordered text-center mt-2 rounded" id="payment-data">
        <thead class="text-secondary thead-light">
            <tr>
                <th>Payment Code</th>
                <th>Payment Method</th>
                <th>Product Name</th>
                <th>Amount Paid</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $oldpays = getOldPayments();
            foreach ($oldpays as $oldpay) :
            ?>
                <tr>
                    <td><?= $oldpay['pay_code'] ?></td>
                    <td><?= $oldpay['method_status'] ?></td>
                    <td><?= $oldpay['pro_name'] ?></td>
                    <td><?= $oldpay['pay_totalprice'] ?>$</td>
                    <td><?= $oldpay['pay_date'] ?></td>
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
        var data = document.getElementById("payment-data");
        var file = XLSX.utils.table_to_book(data, {
            sheet: "sheet1"
        });
        XLSX.writeFile(file, 'file.' + type);
    }
    const export_button = document.getElementById("export_button");
    export_button.addEventListener('click', () => {
        export_table_data_to_excel('xlsx');
    });
</script>

</html>