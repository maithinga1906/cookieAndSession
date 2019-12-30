<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bai2";
	$db = new mysqli($servername, $username, $password, $database);
	error_reporting(0);
	$sql = "SELECT * FROM users";
	$result = $db->query($sql)->fetch_all();
	session_start();
	if(isset($_POST["login"])){
		$_SESSION["session_username"] = $_POST["username"];
		for ($i=0; $i < count($result); $i++) {
			if($_POST["username"] == $result[$i][1] && $_POST["password"] == $result[$i][2]){
				echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="profile2.php";</script>';
				$_SESSION["user_id"] = $result[$i][0];
			}
		}
	}
// $sql = "SELECT * from users where username = '$username' and password ='$password'";
// $db->query($sql)->fetch_all();
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
			<button name="login">LOGIN</button>
		</div>
			<center>
				<a href="#">Fogot password</a>
				<br>
				<a class="signup" href="#">Don't have account? Sign up</a>
			</center>
		<br>
	</form>
</body>
</html>