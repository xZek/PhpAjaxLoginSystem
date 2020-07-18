$(document).ready(function() {
    $("#login_form").submit(function(e){
		  e.preventDefault();
		  $.ajax({
			url:'../PHP/login.php',
			type:'POST',
			data: {username:$("#username").val(), password:$("#password").val()},
			success: function(resp) {
			   if(resp == "invalid") {
					$("#errorMsg").html("Invalid username and password!");
			   } else {
					window.location.href= resp;
			   }
			}
		 });
	});
});
