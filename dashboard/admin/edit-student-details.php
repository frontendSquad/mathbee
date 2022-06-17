<?php
$title = "Edit Student Details";
$pg = "student-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="edit-student-details" class="edit-student-details-page">
    <div class="content-body">
        <div class="page-title mb-4">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="view-student-details.php"><i class="fas fa-long-arrow-alt-left"></i></a> Edit Student</h2>
                </div>
            </div>
        </div>
        <div class="detail-block media d-lg-flex d-block">
            <div class="media-left flex-shrink-0 mb-5 mb-lg-0">
                <div class="media-left flex-shrink-0 mb-4 mb-lg-0">
                    <div class="profile-img text-center">
                        <img src="../assets/images/profile-avatar.png" alt="" class="img-fluid mb-2">
                    </div>
                </div>
            </div>
            <div class="media-body flex-grow-1 ps-0 ps-lg-5 ms-0 ms-lg-3">
                <form action="">
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">First Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="Moses">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Last Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="Indries">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Username <span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="batmwn2022">
                            <p>Make sure your username follows the rules mentioned in Appendices A & B</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Phone No <span class="text-red">*</span></label>
                            <input type="tel" class="form-control" value="000595649">
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
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="ps-3">Class Grade</label>
                                <input type="num" class="form-control w-auto" Value="6" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <label class="ps-3">School Name</label>
                                <input type="text" class="form-control w-auto" Value="Abc" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Choose Your Gender <span class="text-red">*</span></label>
                            <div class="card-chart">
                                <div class="select-wrapper w-100">
                                    <select name="" id="" class="form-control w-100 text-light fw-regular form-border">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">DOB <span class="text-red">*</span></label>
                            <input type="text" class="form-control" value="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="row detail-row">
                        <div class="col-12 mt-3">
                            <button type="button" class="btn btn-red" data-bs-toggle="modal" data-bs-target=".student-update">Update</button>
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