<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password yang anda masukkan tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="box_login">
		<p class="login">Login</p>
 
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>