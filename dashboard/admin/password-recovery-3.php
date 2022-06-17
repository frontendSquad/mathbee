<?php
$title = "Password Recovery";
$pg = "password-recovery";
include('../include/head.php');
?>

<section class="login-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-6 col-lg-8 col-md-10 mx-auto">
				<div class="login-card bg-img p-0">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="right">
								<div class="logo text-center"><img src="../assets/images/logo.png" alt="" /></div>
								<h1 class="mt-4">Forget Password</h1>
								<p class="mb-4">Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
								<form>
									<div class="form-group mb-1">
										<label for="">New Password <span class="text-red">*</span> </label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Enter New Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group mb-1">
										<label for="">Confirm Password <span class="text-red">*</span> </label>
										<div class="position-relative">
											<input type="password" class="form-control confirm-input" placeholder="Enter Confirm Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash confirm-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group mt-2">
										<div class="d-flex justify-content-end">
											<div class="forgot-pass">
												<a href="password-recovery-1.php">Resend Code</a>
											</div>
										</div>
									</div>
									<div class="form-group text-center mt-4 mb-0">
										<button type="button" class="btn btn-red w-100 py-3" data-bs-toggle="modal" data-bs-target=".update-password">Continue</button>
									</div>
									<div class="form-group text-center bck-btn mb-0 mt-2 mt-lg-2">
										<a href="login.php">Back To Login</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('../include/footer.php') ?>