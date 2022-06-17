<?php
$title = "My Profile";
$pg = "my-profile";
include('../include/header.php');
?>
<!-- Basic form layout section start -->
<section id="protfolio_page" class="profile-page">
    <div class="content-body">
        <div class="page-title mb-5">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2>My Profile</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-10">
                <div class="detail-block media d-lg-flex d-block">
                    <div class="media-left flex-shrink-0 mb-4 mb-lg-0">
                        <div class="profile-img text-center">
                            <img src="../assets/images/profile-avatar.png" alt="" class="img-fluid mb-2">
                            <a href="change-password.php" class="text-blue fs-16 fw-bold text-decoration-underline">Change Password</a>
                        </div>
                    </div>
                    <div class="media-body flex-grow-1">
                        <div class="row mb-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>First Name</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Mark Jacob</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Last Name:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Carson</p>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-5">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Email Address:</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>mark@email.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="edit-profile.php" class="btn btn-red">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>