<?php
$title = "Edit Profile";
$pg = "edit-profile";
include('../include/header.php');
?>
<!-- Basic form layout section start -->
<section id="protfolio_edit_page" class="profile-edit-page">
    <div class="content-body">
        <div class="page-title mb-4">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="profile.php"><i class="fas fa-long-arrow-alt-left"></i></a> Edit Profile</h2>
                </div>
            </div>
        </div>
        <div class="detail-block media d-lg-flex d-block">
            <div class="media-left flex-shrink-0 mb-5 mb-lg-0">
                <div class="profile-img text-center">
                    <div class="attached mb-2">
                        <img src="../assets/images/profile-avatar.png" alt="" class="img-fluid">
                        <button name="file" class="btn camera-btn" onclick="document.getElementById('upload').click()">
                            <i class="fa fa-camera"></i></button>
                        <input type="file" id="upload" name="file">
                    </div>
                    <a href="change-password.php" class="text-blue fs-16 fw-bold text-decoration-underline">Change Password</a>
                </div>
            </div>
            <div class="media-body flex-grow-1 ps-0 ps-lg-5 ms-0 ms-lg-3">
                <form action="">
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">First Name<span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="Moses">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Last Name<span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="Indries">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="ps-3">Email</label>
                                <input type="email" class="form-control w-auto" Value="mark@email.com" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row detail-row">
                        <div class="col-12 mt-3">
                            <button type="button" class="btn btn-red" data-bs-toggle="modal" data-bs-target=".update-profile">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>