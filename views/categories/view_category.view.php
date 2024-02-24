<!-- Begin Page Content -->
<div class="container-fluid pl-5 ml-5 align-items-center w-75 mt-5">

    <!-- DataTales Example -->
    <div class="card shadow">
    
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">View Category</h4>
        </div>
        <div class="card-body p-5">
            <div class="table-responsive d-flex justify-content-between">
                <div>
                    <h4><span class="text-primary font-weight-bold">ID :</span> <?= $cate['cate_id'] ?></h4>
                    <h4><span class="text-primary font-weight-bold">Name :</span> <?= $cate['cate_name'] ?></h4>
                </div>
                <div>
                    <h4><span class="text-primary font-weight-bold">Cate Date :</span> <?= $cate['cate_date'] ?></h4>
                    <h4><span class="text-primary font-weight-bold">Products :</span> <?php echo $numberOfproduct;?> </h3>
                </div>
            </div>
            <br>
            <h4><span class="text-primary font-weight-bold">Descriptionn :</span> <?= $cate['cate_desc'] ?></h4>
        </div>
    </div>
    <div class="d-flex row justify-content-end align-items-center mt-5 mr-3">
        <div class="d-flex row justify-content-end align-items-center">
            <a href="/categories">
                <button class="btn btn-sm btn-danger p-3"> <i class="fas fa-chevron-left"></i>Backed</i></button></a>
        </div>
    </div>

</div>
</div>
<!-- /.container-fluid -->