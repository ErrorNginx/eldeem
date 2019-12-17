
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="#" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/ldm_trans.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">



	<link rel="stylesheet" href="<?php echo base_url().'assets/template/assets/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/template/assets/css/material-dashboard.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/template/assets/css/demo.css'?>">


	 
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="<?php echo base_url().''?>">TECHNO<span>.</span></a></h1>
				<nav role="navigation">
					<ul>
						
							<li><a href="<?php echo base_url() . '' ?>">Home</a></li>
							<li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
							<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>




	 <!-- <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Edit Profile -
                                        <small class="category">Complete your profile</small>
                                    </h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Company (disabled)</label>
                                                    <input type="text" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adress</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


		<!-- jQuery -->
		<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
		<!-- Easy PieChart -->
		<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
		<!-- Flexslider -->
		<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
		<!-- Stellar -->
		<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

		<!-- MAIN JS -->
		<script src="<?php echo base_url().'theme/js/main.js'?>"></script>




		<!--   Core JS Files   -->
		<script src="<?php echo base_url('assets/template/assets/css/jquery-3.1.1.min.js');?>"></script>
		<script src="<?php echo base_url('assets/template/assets/css/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/template/assets/css/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/template/assets/css/material.min.js');?>"></script>
		<script src="<?php echo base_url('assets/template/assets/css/perfect-scrollbar.jquery.min.js');?>"></script>


		<!-- Forms Validations Plugin -->

		<script src="<?php echo base_url('assets/template/assets/css/jquery.validate.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/moment.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/chartist.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jquery.bootstrap-wizard.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/bootstrap-notify.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/bootstrap-datetimepicker.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jquery-jvectormap.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/nouislider.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jquery.select-bootstrap.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jquery.datatables.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/sweetalert2.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jasny-bootstrap.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/fullcalendar.min.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/jquery.tagsinput.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/css/material-dashboard.js')?>"></script>

		<script src="<?php echo base_url('assets/template/assets/js/demo.js')?>"></script>
		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>


	</body>
</html>
