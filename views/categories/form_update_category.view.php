
<div class="container p-5 m-5 d-flex justify-content-center">
  <div class="card p-5 ml-5 w-75">
    <form action="controllers/categories/update_category.controller.php" class="d-flex flex-xl-column" method="post">
      <input type="hidden" name="id" value="<?= $cate['cate_id'] ?>">
      <div class="form-group">
        <label for="title" class="text-primary m-2">Create</label>
        <input type="text" class="form-control" value="<?= $cate['cate_name'] ?>" name="category" placeholder="Category_name">
      </div>
      <button type="submit" class="btn btn-primary align-self-end">Update</button>
    </form>
  </div>
</div>