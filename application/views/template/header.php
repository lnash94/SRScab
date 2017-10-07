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

    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
      <!-- JQuery -->
	<script src="<?php echo base_url();?>/assets/js/jquery-3.1.1.min.js"></script>
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
	 <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
</head>

<body class="home">
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
                        <li><a href="sidebar-left.html">Luxury Cars</a></li>
                        <li><a href="sidebar-right.html">Genaral Cars</a></li>
                        <li><a href="sidebar-right.html">Bus,Van,4WD,SUV</a></li>
                        <li><a href="sidebar-right.html">Classic And Vintage</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>users/adminlogin">Admin test</a></li>
                <li><a href="<?php echo base_url();?>about">About us</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
                <li><a href="<?php echo site_url('users/login') ?>" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SIGN IN / SIGN UP</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<div class="content-wrapper">
    <?php  if ($this->session->flashdata('user_registered')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif; ?>
    <?php  if ($this->session->flashdata('login_failed')):?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
    <?php endif; ?>

    <?php  if ($this->session->flashdata('user_loggedin')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif; ?>