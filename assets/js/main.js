$(document).ready(function(){
    $("#full_name").focusout(function(){
		var full_name=$("#full_name").val();
		if(full_name.length<1 || full_name.length>20)
			{
				$("#w_full_name").removeClass('d-none');
				$("#w_full_name").text('your name is must be between 2 and 20');
			}
	});
	$("#user_name").focusout(function(){
		var user_name=$("#user_name").val();
		if(user_name.length<1 || user_name.length>20)
			{
				$("#w_user_name").removeClass('d-none');
				$("#w_user_name").text('your name is must be between 2 and 20');
			}
	});
	
	$("#email").focusout(function(){
		var email=$("#email").val();
		var patarn=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(email.match(patarn))
			{
				return true;
			}
		
		else
			{
				$("#w_email").removeClass('d-none');
				$("#w_email").text('Your Email not valid format')
			}
	});
	
	$("#main_password").focusout(function(){
		var main_password=$("#main_password").val();
		var main_pattarn=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
		if(main_password.length<8 || main_password.length>15)
			{
				$("#w_main_password").removeClass('d-none');
				$("#w_main_password").text('your password length shouldbe between 8 and 15');
				
			}
		else if(main_password.match(main_pattarn))
		{
			return true;
		}
		
		else
			{
				$("#w_main_password").removeClass('d-none');
				$("#w_main_password").text('your password shouldbe valid format');
			}
	});
	
	$("#confirm_password").focusout(function(){
		var main_password=$("#main_password").val();
		var confirm_password=$("#confirm_password").val();
		if(main_password.match(confirm_password))
			{
				$("#w_confirm_password").removeClass('d-none');
				$("#w_confirm_password").text('Password Match');
			}
		else
			{
				$("#w_confirm_password").removeClass('d-none');
				$("#w_confirm_password").text('Password Cant Match');
			}
	});
	
	$("#submit").click(function(){
		var full_name=$("#full_name").val();
		var user_name=$("#user_name").val();
		var email=$("#email").val();
		var main_password=$("#main_password").val();
		var confirm_password=$("#confirm_password").val();
		var file=$("#file").val();
		if(full_name.length<1 || user_name.length<1 || email.length<1 || main_password.length<1 || confirm_password.length<1 || file.length<1)
			{
				alert("something wrong");
			}
	});
	
//	check
	
 function click()
	{
		alert("Hello");
	}
	
});
