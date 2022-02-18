<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 36);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>
