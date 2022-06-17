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
									<div class="form-group">
										<label for="">Email <span class="text-red">*</span></label>
										<input type="email" class="form-control" placeholder="Enter Email Address">
									</div>
									<div class="form-group text-center mt-4 mb-0">
										<button class="btn btn-red w-100 py-3">Continue</button>
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