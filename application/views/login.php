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
	...
</div>
<div id="notif" style="display:none;">
	
</div>
<form id="loginform" action="#">
	<input type="text" name="username" id="loginusername" >
	<input type="password" name="password" id="loginpassword">
	<input type="submit" id="loginsubmit">
</form>


</body>
</html>