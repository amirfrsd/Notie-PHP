<?php 
include("db.php"); 
$username = $_GET['username'];
$query = sprintf("SELECT pastebin FROM usersystem WHERE username = '%s'",mysql_real_escape_string($username));
$result = mysql_query($query);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
while ($row = mysql_fetch_assoc($result)) {
    echo $row['pastebin'];
}
mysql_free_result($result);

?>