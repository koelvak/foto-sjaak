<?php
include("connect_db.php");



$update_sql = "UPDATE users SET firstname='".$_POST['firstname']."',
infix='".$_POST['infix']."',
surname='".$_POST['surname']."',
street='".$_POST['street']."',
city='".$_POST['city']."',
zip_code='".$_POST['zip_code']."',
birthday='".$_POST['birthday']."',
password='".$_POST['password']."' WHERE  id = 39";
//surname='".$_POST['surname']."' WHERE  $_SESSION['id'] = $record['id']";
mysql_query($update_sql, $db);
//mysql_query($update_sql, $connection);

echo $update_sql;
echo "Last update record has id : 39."; 

?> 
