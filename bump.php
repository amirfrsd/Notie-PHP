<?php 
include("db.php"); 
$text = $_GET['text'];
$username = $_GET['username'];
$query = sprintf("UPDATE  `usersystem` SET  `pastebin` =  '%s' WHERE  `username` =  '%s'",mysql_real_escape_string($text),mysql_real_escape_string($username));
echo "I_AM_DONE";
$result = mysql_query($query);
mysql_free_result($result);
?>