$(document).ready(function(){
	$('#loginform').submit(function(e){
		e.preventDefault();
		var username = $('#loginusername').val();
		var password = $('#loginpassword').val();

		$.ajax({
			type: "POST",
			url: base_url+"account/login_post",
			data: {
				username : username,
				password : password
			},
			beforeSend : function(){
				loadingStart();
			},
			success : function(html){
				loadingStop();
				data = JSON.parse(html);
				notif(data.message);
				if(data.status == 'true'){
					window.location.href = data.ref;
				}
			},
		});
	});


	$('#registerform').submit(function(e){
		e.preventDefault();
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
				loadingStart();
			},
			success : function(html){
				loadingStop();
				data = JSON.parse(html);
				notif(data.message);
				if(data.status == 'true'){
					window.location.href = data.ref;
				}
			},
		});
	});



});