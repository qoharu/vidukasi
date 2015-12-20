<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/account.js'); ?>"></script>

<div id="loading" style="display:none;">
	Loading...
</div>
<div id="notif" style="display:none;">
	
</div>
<form id="registerform">
	<input type="text" id="registerfullname" placeholder="Full Name" ><br>
	<input type="email" id="registeremail" placeholder="Email" ><br>
	<input type="text" id="registerusername" placeholder="Username"><br>
	<input type="password" id="registerpassword" placeholder="Password"><br>
	<input type="submit" value="Daftar">
</form>


</body>
</html>