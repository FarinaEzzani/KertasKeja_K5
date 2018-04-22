<?php
include('config.php');
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$operasi = $_POST['operasi'];
$hasil = $_POST['hasil'];
$no3 = $_POST['no3'];

$query="insert into kira values('$no1','$no2','$hasil','$no3')";
if(mysql_query($query)){
header('Location:kalk.php');}
else{
echo"something went wrong";}
?>