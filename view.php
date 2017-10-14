<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<table><center>
<?php
	$email =$_POST['email'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = str_repeat("*", strlen($password));
	echo "Selamat Datang";
	echo "<tr><td>E-mail</td><td>:</td><td>$email</td>";
	echo "<tr><td>Nama</td><td>:</td><td>$nama</td>";
	echo "<tr><td>Username</td><td>:</td><td>$username</td>";
	echo "<tr><td>Password</td><td>:</td><td>$pass</td>";
	
?>
</center></table>
</body>
</html>
