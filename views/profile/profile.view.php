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
        <img class="card-img-top" src="https://marketplace.canva.com/EAE2cQaUHVA/1/0/1600w/canva-black-minimal-motivation-quote-linkedin-banner-HoRi-2buBWk.jpg" alt="Cover Image" id="coverImage" style="height: 180px; object-fit: cover; position: absolute;">
        <div class="card-body d-flex flex-column align-items-center justify-content-start">
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
</script>