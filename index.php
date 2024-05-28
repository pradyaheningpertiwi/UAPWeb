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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Event Organizer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Event Organizer</h1>

    <h2>Pendaftaran Peserta</h2>
    <form id="registrationForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" id="name" name="name" placeholder="Nama Lengkap" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="tel" id="phone" name="phone" placeholder="Nomor Telepon" required>
        <button type="submit" name="register">Daftar</button>
    </form>
    <a style href="login.php">Register</a>
</div>

</body>
</html>
