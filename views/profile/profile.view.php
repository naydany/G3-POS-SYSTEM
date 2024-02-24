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
            <h2 class="card-title text-center mt-3"><?= $name ?></h2>
            <h6><b>Bio: </b><?= $bio ?></h6>
            <div style="display: flex;">
                <div>
                    <label for="coverImageInput" class="d-block text-center btn btn-light btn-sm mt-2">
                        <!-- <i class="fas fa-camera fa-lg"></i> Change Cover -->
                        <input type="file" id="coverImageInput" accept="image/*" class="d-none" onchange="loadFile(event, 'coverImage')">
                    </label>
                </div>
                <div>
                    <label for="profileImageInput" class="d-block text-center btn btn-light btn-sm mt-2">
                        <!-- <i class="fas fa-camera fa-lg"></i> Change Profile -->
                        <input type="file" id="profileImageInput" accept="image/*" class="d-none" onchange="loadFile(event, 'profileImage')">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <ul class="list-group list-group-flush">
        <h2 class="card-title">Details:</h2>
        <li class="list-group-item"><b>Role:</b> <?= $role ?></li>
        <li class="list-group-item"><b>Gender:</b> <?= $genders ?></li>
        <li class="list-group-item"><b>Date of birth:</b> <?= $birthdate ?></li>
        <li class="list-group-item"><b>Country:</b> <?= $country ?></li>
    </ul>
    <div class="card-body">
        <a href="/update_profile"><button type="button" class="btn btn-outline-primary float-right">Update
                detail</button></a>
    </div>
</div>

<script>
    function loadFile(event, targetImageId) {
        var image = document.getElementById(targetImageId);
        image.src = URL.createObjectURL(event.target.files[0]);
    }
    document.getElementById("coverImage").addEventListener("click", function() {
        document.getElementById("coverImageInput").click();
    });
    document.getElementById("profileImage").addEventListener("click", function() {
        document.getElementById("profileImageInput").click();
    });
</script>