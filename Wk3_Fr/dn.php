<?php  
$file_url = 'C:\wamp64\www\Coding\aj1';  
# header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
?>  