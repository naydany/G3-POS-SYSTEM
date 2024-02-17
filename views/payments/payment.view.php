<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* .btn-success {
            margin-right: 30px;
        } */
    </style>
    <title>Pay</title>
</head>

<body>
    <div class="card-header border-0">
        <a href="/orders" class="btn btn-outline-primary">
            <i class="fas fa-plus"></i> <i class="fas fa-utensils"></i>
            Make A New Order
        </a>
    </div>
    <div class="container mt-3 ">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Code</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Total Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>you can </td>
                    <td> do it </td>
                    <td>try more</td>
                    <td> $ 23 </td>
                    <td>10/Junaury/2020</td>
                    <td>
                        <div class="btn-group">

                            <a href="">
                                <button class="btn btn-sm btn-success ">
                                    <i class="fas fa-handshake"></i>
                                    Pay Order
                                </button>
                            </a>

                            <a href="">
                                <button class="btn btn-sm btn-danger ml-3">
                                    <i class="fas fa-window-close"></i>
                                    Cancel Order
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>