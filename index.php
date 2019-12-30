<?php
	session_start();
	error_reporting(0);
	$_SESSION['username'] = $_POST["username"];
	$_SESSION['password']  = $_POST["password"];
	if($_SESSION['username'] == 'admin' && $_SESSION['password'] == '123'){
	echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="profile.php";</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			background-image: url("nen.jpg");
			background-size: cover;
			font-family: verdana;
			opacity: 0.7;
			transform: translate(40%, 35%);
		}
		.main{
			justify-content: center;
			background-color: #000;
			color: white;
			border: 1px solid #0f0d0e;
			width: 20%;
		}
		input{
			height: 30px;
			width: 80%;
			border: 0px;
			border-bottom: 1px solid white;
			background-color: #000000;
			color: white;
		}
		.name{
			align-items: center; 
			justify-content: center;
			margin: 0px;
		}
		button{
			background-color: #008000;
			border-color: #008000;
			border: 1px solid #008000;
			width: 85%;
			height: 30px;
			margin-bottom: 20px;
		}
		button:hover {
			background-color: #cc0000;
			border: 1px solid #cc0000;
		}
		a{
			color: white;
			font-size: 12px;
		}
		.signup{
			margin-bottom: 20px;
		}
		a:hover{
			color: pink;
		}
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<form class="main" method="post">
		<center>
			<h1>LOGIN</h1>
		</center>
		<div style="margin-left: 45px;">
			<div class="user">
				<p>Username</p>
				<div>
					<i class="fas fa-user"></i>
					<input type="text" name="username" placeholder="  username">
				</div>
			</div>
			<br>
			<div class="pass">
				<p>Password</p>
				<div>
					<i class="fas fa-lock"></i>
					<input type="password" name="password" placeholder="  password">
				</div>
			</div>
			<br>
			<button>LOGIN</button>
		</div>
			<center>
				<a href="#">Fogot password</a>
				<br>
				<a class="signup" href="file:///C:/xampp/htdocs/MyForm/signup.html">Don't have account? Sign up</a>
			</center>
		<br>
	</form>
</body>
</html>