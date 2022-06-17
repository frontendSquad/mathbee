<?php
$title = "View Teacher Details";
$pg = "teacher-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-teacher-details" class="view-teacher-details-page">
    <div class="content-body">
        <div class="page-title mb-5">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="teacher-management.php"><i class="fas fa-long-arrow-alt-left"></i></a> Teacher Details</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-10">
                <div class="detail-block media d-lg-flex d-block">
                    <div class="media-left flex-shrink-0 mb-4 mb-lg-0">
                        <div class="profile-img text-center">
                            <img src="../assets/images/profile-avatar.png" alt="" class="img-fluid mb-2">
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
                        <div class="row mb-4 mb-lg-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Phone No</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>+866-876463</p>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Email</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>email@email.com</p>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Class Grade</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>6</p>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>DOB</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>June 3, 1995</p>
                            </div>
                        </div>
                        <div class="row mb-4 mb-lg-4">
                            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 lablename">
                                <label>Gender</label>
                            </div>
                            <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                                <p>Male</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="edit-teacher-details.php" class="btn btn-red">Edit</a>
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