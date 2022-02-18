<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "Brown";
$_SESSION["favanimal"] = "Bat";
echo "Session variables are set. <br>";
?>
<a href="sess2.php">Visit Next page </a>
</body>
</html>