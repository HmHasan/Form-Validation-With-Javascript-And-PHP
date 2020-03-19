<!DOCTYPE html>
<?php

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST')
	
{
	if(empty($_POST['full_name']))
	{
		$name_error="Name Is Required";
	}
	
	else
	{
		$_REQUEST['full_name'];
	}
	
	if(empty($_POST['user_name']))
	{
		$user_error="User Name Is Required";
	}
	
	else
	{
		$user=$_POST['user_name'];
		if(! preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/',$user)){
			$user_error="Your Name Must be Include Letter Number And Spacial Charecter";
		}
	}
	
	if(empty($_POST['email']))
	{
		$email_error="Your Email Is Required";
	}
	
	else
	{
		$email=$_POST['email'];
		if(! preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/',$email))
		{
			$email_error="Your Email Must be Valid Format";
		}
	}
	
	if(empty($_POST['main_password']))
	{
		$password_error="Your Password Required";
	}
	else
	{
		$password=$_POST['main_password'];
		if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))
		{
			$password_error="Your Password Include Name And Numbers And Spacial Charecter";
		}
	}
	
	$password=$_POST['main_password'];
	$c_password=$_POST['confirm_password'];
	
	if($password !=($c_password))
	{
		$confirm_error="Password Doesn't mathc";
	}
	
	$file=$_FILES['file'];
	if(empty($file))
	{
		$file_error="File Must Be Include";
	}
	$tmp=$_FILES['file']['tmp_name'];
	$name=$_FILES['file']['name'];
	$get_text=explode('.',$name);
	$end=end($get_text);
	$mode_name=md5(time().$name);
	$path='file/';
	move_uploaded_file($tmp,$path.$mode_name.'.'.$end);
	
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Please Enter Your Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h2 class="display-4">Stay Closer With Us</h2>
            <small class="text-danger">Please Enter Your Information Correctly</small>
        </div>

        <div class="row justify-content-center d-flex">
            <div class="col-6">
                <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name">
                        <small id="w_full_name" class="text-danger form-text d-none"></small>
                        <small class="text-danger form-text "><?php if(isset($name_error)){echo($name_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" id="user_name" name="user_name">
                        <small id="w_user_name" class="text-danger form-text d-none"></small>
						<small class="text-danger form-text "><?php if(isset($user_error)){echo($user_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <small id="w_email" class="text-danger form-text d-none"></small>
						<small class="text-danger form-text "><?php if(isset($email_error)){echo($email_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="main_password">Password</label>
                        <input type="password" class="form-control" id="main_password" name="main_password">
                        <small id="w_main_password" class="text-danger form-text d-none"></small>
						<small class="text-danger form-text "><?php if(isset($password_error)){echo($password_error);}?></small>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password"> Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        <small id="w_confirm_password" class="text-danger form-text d-none"></small>
						<small class="text-danger form-text "><?php if(isset($confirm_error)){echo($confirm_error);}?></small>
                    </div>
					<div class="form-group">
                        <label for="photo">Upload Your Photo</label><br>
                        <input type="file" class="" id="file" name="file">
                        <small id="w_file" class="text-danger form-text d-none"></small>
						<small class="text-danger form-text "><?php if(isset($file_error)){echo($file_error);}?></small>
                    </div>
                    <div class="form-group">
                        <small>You Agree All Terms And Condtion</small><br>
                        <input type="checkbox" name="check" id="check" value="check-box">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success form-control"  value="Save Your Information" name="submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>