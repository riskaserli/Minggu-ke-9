<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<?php 
	session_start();

	if($_SESSION['Hak']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Selamat Datang</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> anda telah berhasil login sebagai <b><?php echo $_SESSION['Hak']; ?></b>.</p>
	<a href="logout.php">Klik disini untuk logout</a>

	<br/>
	<br/>

</body>
</html>