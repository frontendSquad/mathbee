<?php
$title = "Login";
$pg = "Login In";
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
								<h1 class="mb-4 mt-4">Login To Your Account</h1>
								<form action="dashboard.php">
									<div class="form-group">
										<label for="">Email <span class="text-red">*</span></label>
										<input type="email" class="form-control" placeholder="Enter Email Address">
									</div>
									<div class="form-group mb-1">
										<label for="">Password <span class="text-red">*</span> </label>
										<div class="position-relative">
											<input type="password" class="form-control enter-input" placeholder="Password">
											<button class="btn view-btn position-absolute" onclick="event.preventDefault()">
												<i class="fa fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="form-group mt-2">
										<div class="d-flex justify-content-end">
											<div class="forgot-pass">
												<a href="password-recovery-1.php">Forgot Password?</a>
											</div>
										</div>
									</div>
									<div class="form-group text-center mt-4 mb-0">
										<a href="dashboard.php" class="btn btn-red w-100 py-3">Sign In</a>
									</div>
									<!-- <div class="form-group text-center bck-btn mb-0 mt-4">
								<a href="dashboard.php">Back To Website</a>
							</div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('../include/footer.php'); ?>