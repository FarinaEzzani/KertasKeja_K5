<?php
mysql_connect("localhost","FarinaAmani","famani") or die (mysql_error());
mysql_select_db("kalkulator") or die (mysql_error());

echo 'CONNECTED';
?>
