<?php
include('config.php');
$id=$_POST['id'];
$pass=$_POST['pass'];


$query="insert into signin values('$id','$pass')";
if(mysql_query($query)){
header('Location:signin.php');}
else{
echo"something went wrong";}
?>