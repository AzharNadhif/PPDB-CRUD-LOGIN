<?php
require 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin</title>
</head>

<body>

<center>
	<form action="logincontroller.php" method="POST" style="margin-top: 200px;">
		<h1>Login</h1>
		<label>Username :</label>
		<input type="text" name="nama" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit">SUBMIT LOGIN</button>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
</center>

</body>

</html>