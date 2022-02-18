<!DOCTYPE html>
<?php
$c_nm = "user";
$c_vl = "John Doe";
setcookie($c_nm, $c_vl, time() + (86400 * 30), "C:/wamp64/www/Coding/Wk3_Fr"); // 86400 in seconds = 1 day
?>
<html>
<body>


<?php
if(!isset($_COOKIE[$c_nm])) {
     echo "Cookie named '" . $c_nm . "' is not set!";
} else {
     echo "Cookie '" . $c_nm . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$c_nm];
     print_r($_COOKIE);
     #echo $http_cookie_vars["c_nm"];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>