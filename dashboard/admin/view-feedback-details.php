<?php
$title = "View Feedback Details";
$pg = "feedbacks-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="view-feedback-details" class="view-feedback-details-page">
    <div class="content-body">
        <div class="page-title mb-5">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="feedbacks-management.php"><i class="fas fa-long-arrow-alt-left"></i></a> Feedback Details</h2>
                </div>
            </div>
        </div>
        <div class="detail-block">
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-sm-8 lablename">
                    <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                        <label>First Name</label>
                        <h6 class="fs-16 fw-regular text-dark">Mark Jacob</h6>
                    </div>
                    <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                        <label>Last Name</label>
                        <h6 class="fs-16 fw-regular text-dark">Carson</h6>
                    </div>
                    <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                        <label>Email</label>
                        <h6 class="fs-16 fw-regular text-dark">email@email.com</h6>
                    </div>
                    <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                        <label>Subject</label>
                        <h6 class="fs-16 fw-regular text-dark">Abc</h6>
                    </div>
                    <div class="d-block d-sm-flex align-items-center justify-content-between mb-3">
                        <label>Date</label>
                        <h6 class="fs-16 fw-regular text-dark">June 3, 1995</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 lablename">
                    <label>Message</label>
                    <p class="fs-16 fw-regular text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>