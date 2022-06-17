<?php
$title = "Update Password";
$pg = "update-password";
include('../include/header.php');
?>

<!-- Basic form layout section start -->
<section id="change_password" class="my-profile">
	<div class="content-body">
		<div class="page-title mb-4">
			<div class="row">
				<div class="col-12 col-lg-12">
					<h2><a href="profile.php"><i class="fas fa-long-arrow-alt-left"></i></a> Update Password</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-7 col-xxl-5">
				<form action="">
					<div class="row form-group">
						<div class="col-12">
							<label class="text-dark fs-16 fw-bold ps-3 mb-2">Current Password <span class="text-red">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control show-input-1" placeholder="Current Password">
								<button class="btn view-btn show-btn-1 position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-12">
							<label class="text-dark fs-16 fw-bold ps-3 mb-2">New Password <span class="text-red">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control show-input-2" placeholder="New Password">
								<button class="btn view-btn show-btn-2 position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-12">
							<label class="text-dark fs-16 fw-bold ps-3 mb-2">Confirm Password <span class="text-red">*</span></label>
							<div class="position-relative">
								<input type="password" class="form-control show-input-3" placeholder="Confirm New Password">
								<button class="btn view-btn show-btn-3 position-absolute" onclick="event.preventDefault()">
									<i class="fa fa-eye-slash" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="row detail-row">
						<div class="col-12 mt-3">
							<a href="profile.php" class="btn btn-red" data-bs-toggle="modal" data-bs-target=".update-password">Update</a>
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