<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">

                        <div class="space-30"></div>

                        <div class="space-30"></div>

                        <div class="space-30"></div>

                        <div class="space-30"></div>

                        <div class="position-relative">
                            <div class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <center>Masukan Data User Baru</center>
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="post" action="<?php echo base_url("Login/proses_registrasi") ?>">
                                            <fieldset>
                                                <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="user" type="text" required class="form-control" placeholder="Masukan User" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

                                                <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="nama" type="text" required class="form-control" placeholder="Masukan Nama" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

                                                <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="pass" type="password" required class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <a href="<?php echo base_url() ?>" class="width-35 pull-left btn btn-sm btn-danger">
                                                        <i class="ace-icon fa fa-arrow-left icon-on-right"></i>
															<span class="bigger-110">Kembali</span>
                                                    </a>

                                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>
														</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="toolbar clearfix">
                                        <center>
                                            <h4>
                                                <i class="ace-icon fa fa-leaf green"></i>
                                                <span class="red">Template By Ace</span>
                                            </h4>
                                        </center>
                                    </div>

                                    <!-- <div class="toolbar center">
                                        <a href="#" data-target="#login-box" class="back-to-login-link">
                                            <i class="ace-icon fa fa-arrow-left"></i> Back to login
                                        </a>
                                    </div> -->
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.signup-box -->
                        </div>
                        <!-- /.position-relative -->

                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.main-content -->
    </div>
    <!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>

    <!-- inline scripts related to this page -->
</body>

</html>