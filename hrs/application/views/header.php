<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hotel Reservation System </title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?=base_url()?>public/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url()?>/public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?=base_url()?>/public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=base_url()?>/public/css/animate.css"/>
	<link rel="stylesheet" href="<?=base_url()?>/public/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?=base_url()?>/public/css/style.css"/>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>


	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+88) 666 121 4321
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.hrs@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="user-panel">
                            <?php if(isset($_SESSION['user_id'])):?>
                            <div class="dropdown">
                                <button class="btn btn-navbar dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if($_SESSION['role'] == "user"):?>
                                    <a class="dropdown-item" href="<?=base_url()?>user/<?php echo $_SESSION['user_id']?>">My Account</a>
                                    <?php endif;?>
                                    <?php if($_SESSION['role'] == "owner"):?>
                                    <a class="dropdown-item" href="<?=base_url()?>owner/<?php echo $_SESSION['user_id']?>">Owner Reservations</a>
                                    <?php endif;?>
                                    <?php if($_SESSION['role'] == "admin"):?>
                                    <a class="dropdown-item" href="<?=base_url()?>admin">Admin Panel</a>
                                    <?php endif;?>
                                    <a class="dropdown-item" href="<?=base_url()?>logout">Logout</a>
                                </div>
                            </div>
                            <?php else:?>
							<a role="button" href="#" data-toggle="modal" data-target="#registerModal"><i class="fa fa-user-circle-o"></i> Register</a>
							<a role="button" href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in" ></i> Login</a>
                            <?php endif;?>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="<?=base_url()?>" class="site-logo"><img src="<?=base_url()?>public/img/logo.jpg" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="<?=base_url()?>">Home</a></li>
							<li><a href="<?=base_url()?>hotels">HOTELS LISTING</a></li>
							<li><a href="<?=base_url()?>about">ABOUT US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- Header section end -->

    <!-- Register Modal -->

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <?php echo form_open('register'); ?>
        
            
            <div class="row">
                <div class="col-md-12 login-form-1">
                <button type="button" class="close close-modal-form" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    <h3 class="mt-4 mb-4">Registration</h3>
                    <?php if(isset($registration_errors)):?>
                    <div id="registration_errors" class="alert alert-danger" role="alert">
                        <?php  echo $registration_errors;?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Enter email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Repeat password" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="Enter first name" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="card_number" class="form-control" placeholder="Enter card number" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="jmbg" class="form-control" placeholder="Enter ID number" value="" />
                    </div>
                    <div class="form-group text-align-center" >
                        <button type="submit" class="btnSubmit">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
    </div>
    <!-- Register Modal End -->


    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <?php echo form_open('login'); ?>  
            <div class="row">
                <div class="col-md-12 login-form-1">
                <button type="button" class="close close-modal-form" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
                    <h3 class="mt-4 mb-4">Login</h3>
                    <?php if(isset($login_errors)):?>
                    <div id="login_errors" class="alert alert-danger" role="alert">
                        <?php  echo $login_errors;?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" placeholder="Enter email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" value="" />
                    </div>
                    <div class="form-group text-align-center" >
                        <button type="submit" class="btnSubmit">Login</button>
                    </div>
                    <div class="form-group text-align-center">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
    </div>
    <!-- Login Modal End -->


        <!-- Hero section -->
        <section class="hero-section set-bg" data-setbg="<?=base_url()?>/public/img/bg.jpg">
        <!-- Hero section end -->
        <?php if($this->uri->segment(1)!=''):?>
            </section>
        <?php endif?>