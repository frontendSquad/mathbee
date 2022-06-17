<?php
$title = "Edit Teacher Details";
$pg = "teacher-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="edit-teacher-details" class="edit-teacher-details-page">
    <div class="content-body">
        <div class="page-title mb-4">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="view-teacher-details.php"><i class="fas fa-long-arrow-alt-left"></i></a> Edit Teacher</h2>
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
                            <label class="ps-3">Email Address <span class="text-red">*</span></label>
                            <input type="email" class="form-control" value="mark@email.com">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Choose Grade <span class="text-red">*</span></label>
                            <div class="card-chart">
                                <div class="select-wrapper w-100">
                                    <select name="" id="" class="form-control w-100 text-light fw-regular form-border">
                                        <option value="" disabled selected>Choose Your Grade</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">School Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Or</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Add Another School <span class="text-red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Another School">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">City <span class="text-red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">State <span class="text-red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">ZIP Code <span class="text-red">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter ZIP Code">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-lg-8 col-xl-6 col-xxl-5">
                            <label class="ps-3">Choose Your Gender <span class="text-red">*</span></label>
                            <div class="card-chart">
                                <div class="select-wrapper w-100">
                                    <select name="" id="" class="form-control w-100 text-light fw-regular form-border">
                                        <option value="" disabled selected>Choose Your Gender</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row detail-row">
                        <div class="col-12 mt-3">
                            <button type="button" class="btn btn-red" data-bs-toggle="modal" data-bs-target=".teacher-update">Update</button>
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