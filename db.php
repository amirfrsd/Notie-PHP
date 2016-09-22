<?php
  session_start();
  mysql_connect("localhost", "amirfars_myDBUse", "amir4sad");
  mysql_select_db("amirfars_myDB"); 
function user_login ($username, $password) { 
  $username = mysql_real_escape_string($username); 
  $password = md5($password);
  $result = mysql_query("SELECT * FROM usersystem WHERE username = '".$username."' AND password = '".$password."' LIMIT 1"); 
  $rows = mysql_num_rows($result); 
  if ($rows<=0 ){ 
      echo "WRONG_USER_OR_PASS"; 
    }
  else { 
     $_SESSION['username'] = true;
	 echo "SUCCESSFULLY_LOGGED_IN";
    } 
 }
?>