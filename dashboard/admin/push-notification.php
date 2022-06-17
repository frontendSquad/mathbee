<?php
$title = "Push Management";
$pg = "push-notification";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="push-notification" class="push-notification-page">
    <div class="row">
        <div class="col-12">
            <div class="content-body shadow-full bg-white rounded-5 p-md-5 p-4">
                <div class="page-title mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2>Push Notification</h2>
                        </div>
                    </div>
                </div>
                <div class="detail-block">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 lablename">
                            <div class="mb-3">
                                <label class="ms-3">Send To</label>
                                <div class="select-wrapper w-100">
                                    <select name="" id="" class="form-control fs-14 text-light form-border">
                                        <option value="">Send to everyone</option>
                                        <option value="">Send to everyone</option>
                                        <option value="">Send to everyone</option>
                                        <option value="">Send to everyone</option>
                                        <option value="">Send to everyone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="ms-3">Description</label>
                                <textarea class="form-control" rows="7" placeholder="Here comes your content for your push notifications.."></textarea>
                            </div>
                            <button class="btn btn-red" data-bs-toggle="modal" data-bs-target=".updated-notification">Push Now</button>
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