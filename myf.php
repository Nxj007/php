<!DOCTYPE html>
<html>
<body>

<?php
include ('index.html');

$myfile = fopen("a.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
/* 
while(!feof($myfile)) {
  echo fgetc($myfile);
}
*/
# echo fgetc($myfile) . "<br>";
echo feof($myfile); #. "<br>";

fclose($myfile);
?>

</body>
</html>