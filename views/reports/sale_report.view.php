<div class="container mt-4">
<div class="card-header d-flex justify-content-between">
    <h4 class=" text-primary">Sales Reports</h4>
    <button class="btn btn-outline-primary h-50 " id="export_button"><i class="bi bi-file-earmark-arrow-down"></i>
        Export Data
    </button>
</div>
<table class="table table-bordered text-center mt-2 rounded" id="sale_data">
    <thead class="text-secondary thead-light">

        <tr>
            <th>Order ID</th>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require "models/order.model.php";
        $orders = getOrdersDetail();
        foreach ($orders as $order) : ?>
            <tr>
                <td><?= $order['order_detail_id'] ?></td>
                <td><?= $order['pro_name'] ?></td>
                <td><?= $order['pro_price'] ?></td>
                <td><?= $order['tatal_price'] ?>$</td>
                <td>
                    <?php if ($order['order_status'] != "Paid" && $order['order_status'] != 1) {
                        echo "<span class='badge badge-danger'>Not Paid</span>";
                    } else {
                        echo "<span class='badge badge-success'>Paid</span>";
                    }
                    ?>
                </td>
                <td><?= $order['order_date'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function export_table_data_to_excel(type) {
        var data = document.getElementById("sale_data");
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
</div>
