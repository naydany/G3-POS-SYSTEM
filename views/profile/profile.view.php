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
            <img class="rounded-circle img-thumbnail mr-3" src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg" alt="Profile Image" id="profileImage" style="height: 140px; width: 140px; object-fit: cover; z-index: 1; margin-top: 70px;">
            <!-- chage profile -->

                

            <!-- endfor -->
            <!-- <img class="rounded-circle img-thumbnail mr-3" src="../../assets/images/<?=$_SESSION['user']['image'] ?>" alt="Profile Image" id="profileImage" style="height: 140px; width: 140px; object-fit: cover; z-index: 1; margin-top: 70px;"> -->
            <!-- <img class="rounded-circle img-thumbnail mr-3" src="../../assets/images/<?= $_SESSION['user']['image'] ?>" alt="Profile Image" id="profileImage" style="height: 140px; width: 140px; object-fit: cover; z-index: 1; margin-top: 70px;"> -->
            <h2 class="card-title text-center mt-3"><?= $_SESSION['user']['name'] ?></h2>
            <h6 class="card-title text-center mt-3"><?= $_SESSION['user']['email'] ?></h6>

            <div style="display: flex;">
                <div>
                    <form action="../../controllers/admin/update_profile.controller.php" method="post">
                        <label for="coverImageInput" class="d-block text-center btn btn-light btn-sm mt-2">
                            <input type="file" id="coverImageInput" accept="image/*" class="d-none" onchange="loadFile(event, 'coverImage')">
                        </label>
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
            </div>
        </div>
    </div>
    <h3 class="card-title ml-5 text-danger mt-3">Details:</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item ml-3">
            <span>This is your profile page You can customize your profile as you want And also change password too .</span>
        </li>
        <li class="list-group-item ml-3 "><b>Role:</b> <?= $_SESSION['user']['role'] ?></li>
        <li class="list-group-item ml-3"><b>Number phone:</b> <?= $_SESSION['user']['phone'] ?></li>
        <li class="list-group-item ml-3"><b>Country:</b> <?= $_SESSION['user']['address']  ?></li>
    </ul>
    <div class="card-body">
        <a href="/update_profile"><button type="button" class="btn btn-outline-primary float-right">Update
                detail</button></a>
    </div>
</div>

<script>
    document.getElementById("coverImage").addEventListener("click", function() {
        document.getElementById("coverImageInput").click();
    });
    document.getElementById("profileImage").addEventListener("click", function() {
        let profile = document.getElementById("profileImageInput");
        profile.click();
        if (profile.value != '') {
            document.getElementById('upload').click();

        }
    });
</script>

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


    // Add event listeners
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">