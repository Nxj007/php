<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ". <br>";
print_r($_SESSION);
echo session_id();
echo session.cache_limiter();
# echo PHPSESSID;
?>

</body>
</html>
