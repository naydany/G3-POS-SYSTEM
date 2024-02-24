<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Order Form</title>
</head>
<body>

<div class="container p-5 m-5 d-flex justify-content-center">
  <div class="card p-5 w-50">
    <form action="/order_product" class="d-flex flex-column" method="post">
      <legend class="text-primary">Order</legend>

      <div class="form-group">
        <div>
          <label for="price" class="">Price</label>
          <input type="text" class="form-control" name="price" placeholder="$ 7">
        </div>
        
        <div>
          <label for="code" class="">Code</label>
          <input type="text" class="form-control" name="code" placeholder="FcWu-123">
        </div>
        
        <div>
          <label for="code" class="">Quantity</label>
          <input type="text" class="form-control" name="quantity" placeholder="">
        </div>
        
      </div>
      <button type="submit" class="btn btn-primary align-self-end">Make Order</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
