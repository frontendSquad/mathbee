<?php
$title = "View Contest Details";
$pg = "contest-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-contest-details" class="view-contest-details-page">
    <div class="content-body">
        <div class="page-title mb-5">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="d-block d-md-flex align-items-center justify-content-between">
                        <h2><a href="contest-management.php"><i class="fas fa-long-arrow-alt-left"></i></a> Contest Details</h2>
                        <a href="edit-contest-details.php" class="btn btn-red mt-md-0 mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-xl-row flex-column-reverse justify-content-between mb-xl-5 mb-3">
                    <div class="detail-block d-block d-xl-flex align-items-center">
                        <img src="../assets/images/contest-img.png" alt="" class="img-fluid">
                        <div class="lablename flex-shrink-0 w-100 ms-xl-5 mt-xl-0 mt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label>Teams Abc</label>
                                        </div>
                                        <div class="col-4 text-center">
                                            <label>Vs</label>
                                        </div>
                                        <div class="col-4">
                                            <label>Teams Abc</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label>Start Date</label>
                                        </div>
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <h6>May 13, 2022</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label>Start Time</label>
                                        </div>
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <h6>02:00</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label>End Date</label>
                                        </div>
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <h6>May 14, 2022</h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label>End Time</label>
                                        </div>
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <h6>02:00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-block flex-shrink-0 mb-xl-0 mb-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <h5 class="fs-12 fw-regular text-gray me-2"><i class="far fa-calendar text-blue me-1"></i> May 5, 2022</h5>
                                <h5 class="fs-12 fw-regular text-gray"><i class="far fa-clock text-blue me-1"></i> 05:00PM</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5 class="fs-16 fw-bold text-dark">Created by: <span class="fs-14 fw-regular text-gray">John Doe</span></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <h5 class="fs-16 fw-bold text-dark">Description</h5>
                        <p class="fs-14 fw-regular text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3 class="fs-28 fw-bold text-black">Classroom Level</h3>
                        <h6 class="fs-14 fw-bold text-dark">Grade Level: 6</h6>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <h3 class="fs-28 fw-bold text-black text-center">Team A</h3>
                        <div class="classroom-detail p-sm-5 p-3 text-center">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">Player</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                </div>
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">Player ID</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                </div>
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">RBI</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">4</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">5</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <h3 class="fs-28 fw-bold text-black text-center">Team B</h3>
                        <div class="classroom-detail p-sm-5 p-3 text-center">
                            <div class="row">
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">Player</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">Alex2022</h6>
                                </div>
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">Player ID</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">1234</h6>
                                </div>
                                <div class="col-4">
                                    <h4 class="fs-19 fw-bold text-white mb-3">RBI</h4>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">4</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">5</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                    <h6 class="fs-16 fw-regular text-white mb-2">0</h6>
                                </div>
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