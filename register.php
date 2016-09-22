<?php
    include("db.php");
    $pastebin = "Simply remove this text and type whatever you want, then click on Bump Button";
    if(isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email'])){
        $username = mysql_real_escape_string($_GET['username']);
        $email = mysql_real_escape_string($_GET['email']);
        $password = md5($_GET['password']);
        $query = sprintf("SELECT username FROM usersystem WHERE username = \"%s\"",mysql_real_escape_string($username));
        $result = mysql_query($query);
        if(mysql_num_rows($result)>0){
            die("USERNAME_TAKEN_BEFORE");
        }
        mysql_query("INSERT INTO usersystem(username, password, email, pastebin) VALUES('$username', '$password', '$email', '$pastebin')") or die (mysql_error()); echo "REGISTERED_SUCCESSFULLY";
    } 
    ?>