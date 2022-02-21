<?php
#echo "Hello there <br>";

// DB Connection
$servername = "localhost";
$username = "root";
$password = "root";
$database = "nixk";

// Creation
$conn = MySQLi_connect($servername, $username, $password, $database);


#Die Function

if(!$conn){
    die("Wrong pass <br>". MySQLi_connect_error());
}
else{
    echo "Connection Success <br>";
}

# Create a table
$sql = "CREATE TABLE `phptst` ( `srno` INT(6) NOT NULL AUTO_INCREMENT ,  
`nm` VARCHAR(11) NOT NULL ,`dest` VARCHAR(6) NOT NULL , PRIMARY KEY  (`srno`))";

// Check Table Creation

$r = mysqli_query($conn, $sql);

if($r){
    echo "Table created Success <br>";
}
else{
    echo "Table Not created Success --> <br>". mysqli_error($conn);
}



?> 