<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed. <br>";

if (isset($_SESSION)){
    print_r($_SESSION);
}
else {
    echo "No";
}
?>

</body>
</html>
