<!DOCTYPE html>
<?php
setcookie("test_cookie", "test", time() + 3600, 'C:/wamp64/www/Coding/Wk3_Fr');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>

</body>
</html>
