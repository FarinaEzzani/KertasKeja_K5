<!DOCTYPE html>
<html>
<head><title>SIGN IN</title>
<link rel='stylesheet' type='text/css' href='style2.css'>
</head>
<body>
<div id="wrapper">
<center>
<form method='POST' action='prosinsert2.php' class='form'>
<center>
<h1>SIGN IN </h1>
<h2>KALKULATOR<h2></center>
   ID	 : <input type='text' name='id' placeholder='Masukkan ID Anda' id='input'><br>
PASSWORD : <input type='text' name='pass' placeholder='Masukkan Password Anda' id='input'>

<style>
a {
    color: hotgreen;
	align: right;
}
</style>
<body>
<p>
<a href="index.php" class="button">Submit</a>
<a href="signup.php" class="button">Sign in</a>
<p>
</body>
<?php include"config.php"; ?>

</form>
</center>
</body>
</html>