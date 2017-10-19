<?php form_open("users/login");?>$this->load->view('template/header');

<div style="margin-top: 100px;"></div>
<!-- container -->
	<div class="container">

			<div class="col-md-5 col-md-offset-6 col-sm-8 col-sm-offset-2 ">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="<?php echo base_url()?>/users/register">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>

								<div class="top-margin ">
									<label>Username/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="username" required>
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="password" required>

								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign in</button>
									</div>
								</div>

							</form>
						</div>
					</div>
             </div>
		<!-- /Article -->
        </div>
	<!-- /container -->


<?php form_close();?>

