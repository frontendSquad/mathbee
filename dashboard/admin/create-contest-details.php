<?php
$title = "Create Contest Details";
$pg = "contest-management";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="create-contest-details" class="create-contest-details-page">
    <div class="content-body">
        <div class="page-title mb-5">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2><a href="contest-management.php"><i class="fas fa-long-arrow-alt-left"></i></a> Create Contest</h2>
                </div>
            </div>
        </div>

        <div class="detail-block">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-8 col-md-10 lablename">
                    <div class="mb-2">
                        <label class="ms-3">Contest Title</label>
                        <input type="text" class="form-control" placeholder="Enter Contest Title">
                    </div>
                    <div class="mb-2">
                        <label class="ms-3">Description</label>
                        <textarea rows="5" placeholder="Write here.."></textarea>
                    </div>
                    <div class="mb-2">
                        <label class="ms-3">Choose Contest Start Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="ms-3">Choose Contest End Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="ms-3">Choose Contest Start Time</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label class="ms-3">Choose Contest End Time</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="ms-3">Choose Contest End Time</label>
                        <br>
                        <button name="file" class="btn file-upload" onclick="document.getElementById('upload').click()">
                            <i class="fas fa-upload"></i>
                        </button>
                        <input type="file" id="upload" name="file">
                    </div>
                    <button class="btn btn-red" data-bs-toggle="modal" data-bs-target=".contest-created">Update</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../include/footer.php');
?>