<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SILAHKAN LOGIN</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>nama:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>email:</label>
				<input type="password" name="password" id="password" />
			</div>		
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
		<a href="index.php">Register</a>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;	
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
