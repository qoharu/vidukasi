$(document).ready(function(){
	
	//Login
	$('#loginform').submit(function(e){
		e.preventDefault();
		var username = $('#loginusername').val();
		var password = $('#loginpassword').val();
		var l = $('#loginsubmit').ladda();
		$.ajax({
			type: "POST",
			url: base_url+"account/login_post",
			data: {
				username : username,
				password : password
			},
			beforeSend : function(){
				l.ladda('start');
			},
			success : function(html){
				l.ladda('stop');
				data = JSON.parse(html);
				notif(data.message);
				if(data.status == 'true'){
					
					window.location.href = data.ref;
				}
			},
		});
	});


	// Register
	$('#registerform').submit(function(e){
		e.preventDefault();
		var l = $('#regitersubmit').ladda();
		var fullname = $('#registerfullname').val();
		var email = $('#registeremail').val();
		var username = $('#registerusername').val();
		var password = $('#registerpassword').val();

		$.ajax({
			type: "POST",
			url: base_url+"account/register_post",
			data: {
				fullname	: fullname,
				email		: email,
				username 	: username,
				password 	: password
			},
			beforeSend : function(){
				l.ladda('start');
			},
			success : function(html){
				l.ladda('stop');
				data = JSON.parse(html);
				notif(data.message);
				if(data.status == 'true'){
					window.location.href = data.ref;
				}
			},
		});
	});

	// Show Password
	$('#showpassword').click(function(){
		if ($(this).data('toggle')) {
		    $('#registerpassword').prop('type', 'password');
		    $(this).data('toggle',0);
		    $(this).html('<i class="fa fa-eye"></i>');	
		}else{
		    $('#registerpassword').prop('type', 'text');
		    $(this).data('toggle',1);	
		    $(this).html('<i class="fa fa-eye-slash"></i>');
		}
	});


});