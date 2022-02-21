<?php
echo "Hello there <br>";
/*
1. MySQLi Extension
2. PDO
*/


// DB Connection
$servername = "localhost";
$username = "root";
$password = "roo";

// Creation
$conn = MySQLi_connect($servername, $username, $password);

#Die Function

if(!$conn){
    die("Wrong pass". MySQLi_connect_error());
}
else{
    echo "Connection Success";
}
?> 