<div class="container p-5 d-flex justify-content-center">
  <div class="card p-5 ml-5 w-75">
    <form action="controllers/categories/create_category.controller.php" class="d-flex flex-xl-column" method="post">
      <div class="form-group">
        <label for="title" class="text-primary m-2">Create</label>
        <input type="text" class="form-control" name="category" placeholder="Category_name">
      </div>
      <div class="form-group">
        <label for="comment" class="text-primary m-2">Comment:</label>
        <textarea class="form-control" name='description' rows="5" id="comment" placeholder="description"></textarea>
      </div>
      <button type="submit" class="btn btn-primary align-self-end">Add</button>
    </form>
  </div>
</div>