<?php
#echo "Hello there <br>";

// DB Connection
$servername = "localhost";
$username = "root";
$password = "root";

// Creation
$conn = MySQLi_connect($servername, $username, $password);


#Die Function

if(!$conn){
    die("Wrong pass <br>". MySQLi_connect_error());
}
else{
    echo "Connection Success <br>";
}

# Create DB
$sql = "Create Database nixk ";
$r = mysqli_query($conn, $sql);

if($r){
    echo "DB created Success <br>";
}
else{
    echo "DB Not created Success <br>". mysqli_error($conn);
}

#echo "The result is <br>".var_dump($r);


?> 