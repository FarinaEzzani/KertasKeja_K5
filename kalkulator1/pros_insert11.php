<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];


$sql="insert into login values('$username','$password')";
$result=mysql_query($sql);

if($result)

{
	header("location:index3.php");
}

else{
	echo "Error!";}
?>