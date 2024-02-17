 <!-- Begin Page Content -->
 <div class="container-fluid p-5 mr-5 ">

     <!-- Page Heading -->
     <div class="card shadow ">
         <div class="card-header py-3 d-flex justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">categories</h6>
             <a href="/create_form_cate" class="btn btn-primary">Create Category</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered thead-light" id="dataTable" width="100%" cellspacing="0">
                     <thead class="thead-light">
                         <tr>
                             <th>Cate Id</th>
                             <th>Cate Name</th>
                             <th>Date</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody class="light">
                         <?php
                            $cates = getCategory();
                            foreach ($cates as $cate) :
                            ?>

                             <tr>
                                 <th><?= $cate['cate_id'] ?></th>
                                 <th><?= $cate['cate_name'] ?></th>
                                 <th><?= $cate['date'] ?></th>
                                 <th>

                                     <a href="views/items/edit.form.view.php?id=<?= $item['cate_id'] ?>"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</button></a>

                                     <a href="views/items/edit.form.view.php?id=<?= $item['cate_id'] ?>"><button class="btn btn-sm btn-success"><i class="fas fa-user-edit"></i>Update</button></a>
                                 </th>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
