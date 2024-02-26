<div class="container d-flex justify-content-center">
    <div class="card p-5 ml-5 w-50">
        <form action="controllers/admin/update_admin.controller.php" class='d-flex flex-xl-column' method='post'>
        <input type="hidden" name="id" value="<?= $admin['id'] ?>">
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name ='name' value="<?= $admin['name']?>" > 
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name='email' value="<?= $admin['email']?>">
            </div>

            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" class="form-control" id="password" name='password' value="<?= $admin['password']?>">
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name='address' value="<?= $admin['address'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>