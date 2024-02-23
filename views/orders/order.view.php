<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>order</title>
</head>

<body>
    <p class="ml-5">Select any product to make an order</p>
    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Image</th>
                    <th>Product code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>food</td>
                    <td> FcWu-123 </td>
                    <td>Koko sup</td>
                    <td> $ 7 </td>
                    <td>
                        <div class="btn-group">
                            <a href="/order_product">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-handshake"></i>
                                    Place order
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
