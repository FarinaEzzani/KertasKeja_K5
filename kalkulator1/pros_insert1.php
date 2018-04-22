<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];


$sql="insert into signup values('$username','$password')";
$result=mysql_query($sql);

if($result)

{
	header("Location:index.php");
}

else{
	echo "Error!";}
?>