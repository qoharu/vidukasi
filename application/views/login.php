<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidukasi | Login</title>
    <link href=" <?php echo base_url('assets/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/css/animate.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/css/style.css') ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/css/plugins/ladda/ladda-themeless.min.css'); ?> " rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Vi</h1>
				<div id="notif" class="alert alert-danger alert-dismissable" style="display:none;"></div>
            </div>
            <h3>Vidukasi - Login Page</h3>
            <p></p>
            <form class="m-t" id="loginform" role="form" action="#">
                <div class="form-group">
                    <input type="text" name="username" id="loginusername" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="loginpassword" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" id="loginsubmit" class="ladda-button btn btn-primary block full-width m-b" data-style="expand-left">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
	<script type="text/javascript">
		var base_url = "<?php echo base_url(); ?>";
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/account.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/wow.min.js') ?> "></script>
	<script src="<?php echo base_url('assets/js/inspinia.js') ?> "></script>
	<!-- Ladda Script -->
	<script src="<?php echo base_url('assets/js/plugins/ladda/spin.min.js') ?> "></script>
	<script src="<?php echo base_url('assets/js/plugins/ladda/ladda.min.js') ?> "></script>
	<script src="<?php echo base_url('assets/js/plugins/ladda/ladda.jquery.min.js') ?> "></script>

</body>

</html>