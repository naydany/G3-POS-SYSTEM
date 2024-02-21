<?php
// Your PHP code here (if needed)
?>

<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>

<button id="susess">Click me</button>
<script>
document.getElementById('susess').addEventListener('click', function () {
    Swal.fire(
        'Payment Successful',
        'Thank you! Your payment is complete',
        'success'
    );
});
</script>
</body>
</html>
