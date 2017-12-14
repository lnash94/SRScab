<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
    <title>SRScabs</title>
	 <!-- JQuery -->
	<script src="<?php echo base_url();?>/assets/js/jquery-3.1.1.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/gt_favicon.png">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-theme.css" media="screen" >
    <!-- JQuery -->
  <script src="<?php echo base_url();?>/assets/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>-->

    
    <script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>/assets/js/customer_registration.js"></script>
    <!-- Custom styles for our template -->

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
	 <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/reservation_styles.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
</head>
<style>
    #success_message{ display: none;}
</style>


<body class="home">
<!--signin modal-->
 <div class="modal fade" id="loginModal">
         <div class="modal-dialog">
         <div class="modal-content">   
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 style="color: black;font-style: italic;font-weight:500"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt="Progressus HTML5 template"> </h3>
    </div>
             <div class="modal-body">
              <form role="form" data-toggle="validator" method="post" action="<?php echo base_url()?>/users/login" name="login_form">
                 <div class="form-group has-feedback">
                         <label for="inputEmail" class="control-label">Email<span class="text-danger">*</span></label>
                         <input type="email" class="form-control" id="inputEmail" name="username" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                         <div class="help-block with-errors"></div>
                </div>
                 <div class="form-group has-feedback">
                    <label>Password <span class="text-danger">*</span></label>
                     <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <br>
                  <br>
                 </div>
                  <p><button type="submit" class="btn btn-md btn-primary">Sign in</button>
               <a  style="color: black;font-style: italic;font-weight:500" href="<?php echo base_url();?>users/logedin">Forgot Password?</a>
              </p>
            </form>
          </div>
          <div class="modal-footer">
               <div class="pull-left">Are you new to here?<a  style="color: mediumaquamarine;font-style: italic;font-weight:500" href="<?php echo base_url()?>/users/sing_up">Create SRScabs account here</a></div>
                <button type="button" class="btn btn-warning btn-sm pull-right" data-dismiss="modal">Close</button>
                
              </div>
			 </div>
	  </div>
	  </div>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="home"><img src="<?php echo base_url();?>assets/images/logo.jpg" alt="Progressus HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.html">Self-Drive</a></li>
                        <li><a href="sidebar-right.html">With Driver/Tours</a></li>
                        <li><a href="sidebar-right.html">Airport/City</a></li>
                        <li><a href="sidebar-right.html">Wedding and Events</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicle types<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>Lcarview">Luxury Cars</a></li>
                        <li><a href="<?php echo base_url();?>Gcarview">Genaral Cars</a></li>
                        <li><a href="<?php echo base_url();?>Vbusview">Bus,Van,4WD,SUV</a></li>
                        <li><a href="<?php echo base_url();?>Ccarview">Classic And Vintage</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>users/admindashbord">Admin test</a></li>
                <?php if ($this->session->userdata('logged_in')):?>
                <li><a href="<?php echo base_url();?>users/customerpayment">Payment Test</a></li>
                <?php endif;?>
                <li><a href="<?php echo base_url();?>about">About us</a></li>

                <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
                <?php if (!$this->session->userdata('logged_in')):?>

                <li> <button  data-toggle="modal" class="btn btn-md btn-warning navbar-btn" data-target="#loginModal" >Sign In</button></li><!--signin model is defined at the top -->
                <?php endif;?>

                <?php if ($this->session->userdata('logged_in')):?>
                <li class="dropdown">

<!--                    --><?php //echo $this->session->userdata('customer name')?>

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li><a href="<?php echo base_url();?>users/dashbord"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashbord</a></li>
                        <li><a href="<?php echo base_url();?>/users/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit profile</a></li>
                        <li><a href="<?php echo base_url();?>/users/changepassword"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Security</a></li>

                        <li><a class="nav-link" id="logoutBtn"  href="<?php echo base_url()?>/users/logout"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
                        </li>
                         </ul>
                </li>
                <?php endif;?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<div class="content-wrapper" id="pagebody">
    <?php  if ($this->session->flashdata('user_registered')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif; ?>
    <?php  if ($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedin')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif; ?>