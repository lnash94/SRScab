<?php //form_open_multipart("users/login");?>
    <br>
    <br>
    <br>
    <br>

			<div class="col-md-4 col-md-offset-7 col-sm-8 col-sm-offset-2 ">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<p class="text-center text-muted">if you haven't account register here  <a href="<?php echo base_url()?>/users/register">Register</a> </p>
							<hr>
								<div class="top-margin ">
                                    <div class="form-group">
									    <label>Username/Email <span class="text-danger">*</span></label>
									    <input type="text" class="form-control" name="username" required>
                                    </div>
                                </div>
                                <div class="top-margin">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
								<hr>
								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Forgot password?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-primary" href="<?php echo base_url()?>/users/login" type="submit">Sign in</button>
									</div>
								</div>

						</div>
					</div>
                </div>
        </div>

<?php //form_close();?>