<?php
include('config.php');
$id=$_POST['id'];
$pass=$_POST['pass'];


$query="insert into signup values('$id','$pass')";
if(mysql_query($query)){
header('Location:signup.php');}
else{
echo"something went wrong";}
?>