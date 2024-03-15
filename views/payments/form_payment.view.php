<div class="container p-5 m-5 d-flex justify-content-center">
    <div class="card p-5 w-50">
        <legend class="text-primary">Payments</legend>
        <form action="/your_form_action_url" class="d-flex flex-column" method="post" id="orderForm">

            <?php
            foreach ($isSuccess as $payment):
            ?>
            <div class="form-group">
                <div>
                    <label for="code">code</label>
                    <input type="text" class="form-control" name="code" value="<?= $payment['pay_code'] ?>" >
                </div>

                <div>
                    <label for="product">product</label>
                    <input type="text" class="form-control" name="product" value="<?=$payment['pro_name'] ?>">
                </div>

                <div>
                    <label for="total price">total price</label>
                    <input type="text" class="form-control" name="total_price" value="<?=$payment['pay_totalprice'] ?>$">
                </div>

                <div class="form-group">
                    <label>card</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="supplier">
                            <option selected>Choose card...</option>
                            <option>paypal</option>
                            <option>ABA</option>
                            <option>AC</option>
                            <option>visa card</option>
                        </select>
                    </div>
                </div>

            </div>
            <?php
            endforeach;
            ?>
            <button type="submit" class="btn btn-success align-self-end">pay now</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('orderForm').addEventListener('submit', function (event) {
        event.preventDefault();
        
        // Check if card input is empty
        var cardInput = document.querySelector('select[name="supplier"]').value;
        if (cardInput.trim() === 'Choose card...') {
            Swal.fire({
                icon: "error",
                title: "Please choose a card",
                text: "Something went wrong!",
            });
        } else {
            Swal.fire({
                icon: "success",
                title: "Payment Successful",
                text: "Thank you! Your payment is complete",
            }).then(() => {
                window.location.href = "/payments";
            });
        }
    });
</script>
