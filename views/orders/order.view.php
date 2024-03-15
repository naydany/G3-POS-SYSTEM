

    <h4 class="text-primary" style="margin-left: 8.3%">Make Order</h4>
    <div class="container mt-3">
        <table class="table table-bordered text-center mt-2 rounded">
            <thead class="text-secondary thead-light">
                <tr>
                    <th>Image</th>
                    <th>Product code</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><img width="50px" height="50px" style="object-fit: cover;" class="rounded-circle" src="../../assets/images/<?= $product['pro_img'] ?>" alt=""></td>
                        <td> <?=$product['pro_code']; ?></td>
                        <td><?=$product['pro_name']; ?></td>
                        <td> <?=$product['pro_price']; ?>$</td>
                        <td>
                            <div class="btn-group">
                                <a href="/order_product?id=<?= $product['pro_id'] ?>">
                                    <button class="btn btn-success">
                                        <i class="bi bi-cart"></i>
                                        Place order
                                    </button>
                                </a>
                            </div>
                        </td>
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
