<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $role = $_POST["role"];
    $genders = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];
    $bio = $_POST["bio"];
}

?>

<div class="card mx-auto" style="width: 50rem; border: 1px solid gray;">
    <div class="card">
        <img class="card-img-top" src="https://wedgecommerce.com/wp-content/uploads/2018/03/pos-banner-2.jpg" alt="Cover Image" id="coverImage" style="height: 180px; object-fit: cover; position: absolute;">
        <div class="card-body d-flex flex-column align-items-center justify-content-start">
<<<<<<< HEAD
            <img class="rounded-circle img-thumbnail mr-3" src="https://img.freepik.com/free-vector/hand-drawn-iranian-women-illustration_23-2149855924.jpg?t=st=1709997754~exp=1709998354~hmac=cd65a27ece0d5b6ca6b032f56a8d5cb17f1da29a1528c2a6e0c3ba58a90b4931&w=826" alt="Profile Image" id="profileImage" style="height: 140px; width: 140px; object-fit: cover; z-index: 1; margin-top: 70px;">
            
            <h2 class="card-title text-center mt-3"><?= $_SESSION['user']['name'] ?></h2>
            <h6 class="card-title text-center mt-3"><?= $_SESSION['user']['email'] ?></h6>

            <form action="../../controllers/admin/update_profile.controller.php" method="post">

                <input type="file" id="profileImageInput" accept="image/*" name="imageprofile">
                <button hidden id="upload" type="submit"></button>
            </form>
                </div>
                <div>
                    <label for="profileImageInput" class="d-block text-center btn btn-light btn-sm mt-2">
                        <input type="file" id="profileImageInput" accept="image/*" class="d-none" onchange="loadFile(event, 'profileImage')">
                        <?php if ($_SESSION['user']['image']) : ?>
                            <img id="profileImage" src="<?= $_SESSION['user']['imageprofile'] ?>" alt="Profile Image">
                        <?php else : ?>
                            <img id="profileImage" src="path_to_default_image" alt="Default Profile Image" style="display: none;">
                        <?php endif; ?>
                        <input type="file" id="profileImageInput" accept="image/*" class="d-none" name="imageprofile">
                    </label>
                    <button hidden id="upload"></button>
                    </form>
                    
                </div>
                <!-- code here  -->


                
            </div>
        </div>
    </div>

    <!-- end -->

=======
            <img id='tapImg' class="rounded-circle img-thumbnail mr-3" src="../../assets/images/<?= $_SESSION['user']['image'] ?>" alt="Profile Image" id="profileImage" style="height: 140px; width: 140px; object-fit: cover; z-index: 1; margin-top: 70px;">
            <!-- chage profile -->
            <h2 class="card-title text-center m/imt-3"><?= $_SESSION['user']['name'] ?></h2>
            <h6 class="card-title text-center mt-3"><?= $_SESSION['user']['email'] ?></h6>
            <form action="../../controllers/admin/update_profile.controller.php" method="post" enctype="multipart/form-data">
                <input hidden type="file" id="profileImageInput" name="image" onchange="readyUpload()">
                <button hidden id="upload" type="submit"></button>
            </form>
        </div>
    </div>
</div>

<!-- upload image  -->
<script>
    // element from HTML
    let tapImg = document.getElementById('tapImg');
    let inputImg = document.getElementById('profileImageInput');
    let button = document.getElementById('upload');
    // Call to click on input of image
    tapImg.addEventListener('click', function() {
        inputImg.click();
    });
    // Call to change image
    function readyUpload() {
        if (inputImg.value != "") {
            button.click();
        }
    };
</script>
<div class="card card-control mx-auto" style="width: 50rem;">
>>>>>>> 6c6bea14e7091d859c6b32bae74ce85df1f68354
    <h3 class="card-title ml-5 text-danger mt-3">Details:</h3>
   
    <ul class="list-group list-group-flush">
        <li class="list-group-item ml-3">
            <span>This is your profile page You can customize your profile as you want And also change password too .</span>
        </li>
        <li class="list-group-item ml-3"><b>Role:</b> <?= $_SESSION['user']['role'] ?></li>
        <li class="list-group-item ml-3"><b>Number phone:</b> <?= $_SESSION['user']['phone'] ?></li>
        <li class="list-group-item ml-3"><b>Country:</b> <?= $_SESSION['user']['address']  ?></li>
    </ul>
    <div class="card-body">
        <a href="/update_profile"><button type="button" class="btn btn-outline-primary float-right">Update
                detail</button></a>
    </div>
</div>

<script>
    var uploadCoverCrop;
    var uploadProfileCrop;

    $(document).ready(function() {
        uploadCoverCrop = $('#upload-cover-demo').croppie({
            enableExif: true,
            viewport: {
                width: 500,
                height: 180,
                type: 'custom'
            },
            boundary: {
                width: 500,
                height: 180
            }
        });
    });

    $('#coverImageInput').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            uploadCoverCrop.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });
<<<<<<< HEAD

    // $('#profileImageInput').on('change', function() {
    //     var reader = new FileReader();
    //     reader.onload = function(e) {
    //         uploadProfileCrop.croppie('bind', {
    //             url: e.target.result
    //         }).then(function() { 
    //             console.log('jQuery bind complete');
    //         });
    //     }
    //     reader.readAsDataURL(this.files[0]);
    // });

    // Add event listeners
=======
</script>
>>>>>>> 6c6bea14e7091d859c6b32bae74ce85df1f68354
