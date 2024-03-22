<div class="container p-5 ml-2 d-flex justify-content-center">
  <div class="card p-5 w-50">
    <form action="controllers/payments/add_payment.controller.php" class="d-flex flex-column" method="post" id="orderForm">
      <legend class="text-primary">Order</legend>

      <div class="form-group">
        <input type="hidden" class="form-control" name="name" value="<?= $products['pro_name'] ?>">
        <div>
          <label for="price" class="">Price</label>
          <input type="text" class="form-control" name="price" value="<?= $products['pro_price'] ?>$">
        </div>

        <div>
          <label for="code" class="">Code</label>
          <input type="text" class="form-control" name="code" value="<?= $products['pro_code'] ?>">
        </div>

        <div>
          <label for="quantity" class="">Quantity</label>
          <input type="number" class="form-control" name="quantity" placeholder="quantity">
        </div>
      </div>
      <button type="submit" class="btn btn-primary align-self-end">Make Order</button>
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('orderForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Check if quantity input is empty
      var quantityInput = document.querySelector('input[name="quantity"]').value;
      if (quantityInput.trim() === '') {
        Swal.fire({
          icon: "error",
          title: "Please input quantity",
          text: "Something went wrong!",
        });
      } else {
        Swal.fire({
          icon: "success",
          title: "Order Successful",
          text: "Thank you! Your order is complete",
        }).then(() => {
          document.getElementById('orderForm').submit();
        });
      }
    });

  });
</script>