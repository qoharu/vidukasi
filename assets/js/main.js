$(document).ready(function(){

	loadingStart = function(){
		$('#loading').show();
	}
	loadingStop = function(){
		$('#loading').hide();
	}

	notif = function(pesan){
		$('#notif').html(pesan);
		$('#notif').fadeIn().delay(3000).fadeOut();
	}


});