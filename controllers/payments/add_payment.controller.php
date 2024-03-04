<?php
require "../../database/database.php";
require "../../models/payment.model.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['price'] !== '' && $_POST['code'] !== '' && $_POST['name'] !== '' && $_POST['quantity'] !== '') {
        $price = $_POST["price"];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];

        $price = (float) str_replace("$", "", $price);
        $result = $price * $quantity;
        $resultWithSymbol = number_format($result, 2) . "$";
        $add = createPayment($code, $resultWithSymbol, $name);
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('orderForm').addEventListener('submit', function (event) {
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
                // If quantity is not empty, show success message
                Swal.fire({
                    icon: "success",
                    title: "Order Successful",
                    text: "Thank you! Your order is complete",
                }).then(() => {
                    // Auto-submit the form
                    document.getElementById('orderForm').submit();
                });
            }
        });
    });
</script>
</script>
