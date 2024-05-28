<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uapseo";

// Create connection
$konek = mysqli_connect($servername, $username, $password, $dbname);
if (!$konek) {
    die("Tidak bisa Terkoneksi");
}

// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nama = mysqli_real_escape_string($konek, $_POST['name']);
    $email = mysqli_real_escape_string($konek, $_POST['email']);
    $phone = mysqli_real_escape_string($konek, $_POST['phone']);
    
    $sql = "INSERT INTO register (nama, email, phone) VALUES ('$nama', '$email', '$phone')";
    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Pendaftaran Berhasil!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }
}

// Handle contact form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact'])) {
    $nama = mysqli_real_escape_string($konek, $_POST['contactName']);
    $email = mysqli_real_escape_string($konek, $_POST['contactEmail']);
    $message = mysqli_real_escape_string($konek, $_POST['contactMessage']);
    
    // Simpan data kontak ke dalam tabel tertentu di database
    // Misalnya, Anda memiliki tabel 'pesan_kontak'
    $sql = "INSERT INTO pesan_kontak (nama, email, pesan) VALUES ('$nama', '$email', '$message')";
    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Pesan Terkirim!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>SILAHKAN REGISTRASI</h2></center>	
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
				<label>phone:</label>
				<input type="phone" name="phone" id="phone" />
			</div>			
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
		<a href="login.php">Register</a>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var phone = document.getElementById("phone").value;		
		if (username != "" && password!="" && phone!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>
