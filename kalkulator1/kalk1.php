<html>
<head><title>KALKULATOR</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<p style="background-color:#B04A00;">
</head>

<body>
<div id="wrapper">
<form method='POST' action='prosinsertt.php' class='form'>
<h1>Kalkulator</h1>
<input type='text' name='no1' placeholder='Masukkan Nilai Pertama' id='input'>
<input type='text' name='no2' placeholder='Masukkan Nilai Kedua' id='input'>
<center><select name='ope' class='select'>
<option name='ope'>--Pilih Operasi--</option>
<option name='ope' value='tambah'>+</option>
<option name='ope' value='tolak'>-</option>
<option name='ope' value='darab'>*</option>
<option name='ope' value='bahagi'>/</option>
<option name='ope' value='modulus'>%</option>
</select>

<input type='submit' name='proses' value='Hitung' id='input'></center>
 
<div class='hasil' <?php echo $hasil; ?>>
<input type='text' name='catatan' placeholder='Catatan' id='input'>
<?php
include('config.php');
?>
</form>
</body>
</html>