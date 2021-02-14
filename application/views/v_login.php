<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />

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
                                            <center>Halaman Login</center>
                                        </h4>

                                        <div class="space-6"></div>

                                        <form method="post" action="<?php echo base_url('login/cek_login') ?>">
                                            <fieldset>
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="user" required class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass" required class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <input type="submit" value="login" class="width-35 pull-right btn btn-sm btn-primary">
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <span class="bigger-250"><a href="<?php echo base_url() ?>Login/v_register" >Belum Punya Akun ??</a></span>
                                        </div>

                                        <div class="space-6"></div>
                                    </div>
                                    <!-- /.widget-main -->

                                    <div class="toolbar clearfix">
                                        <center>
                                            <h4>
                                                <i class="ace-icon fa fa-leaf green"></i>
                                                <span class="red">Template By Ace</span>
                                            </h4>
                                        </center>
                                    </div>
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.login-box -->
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
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible'); //hide others
                $(target).addClass('visible'); //show target
            });
        });
    </script>
</body>

</html>