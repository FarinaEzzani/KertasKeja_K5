<?php
include('config.php');

$no1=$_POST['no1'];
$no2=$_POST['no2'];
$ope=$_POST['ope'];
$hasil=$_POST['hasil'];
$catatan=$_POST['catatan'];

$sql="insert into kira values('$no1','$no2','$ope','$hasil','$catatan')";
$result=mysql_query($sql);

if($result)

{
	header("Location:papar.php");
}

else{
	echo "Error!";}
?>
