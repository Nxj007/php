<?php
$myfile = fopen("nwf.txt", "a") or die("Unable to open file!");

$txt = "Nixk J\n";
fwrite($myfile, $txt);

$txt = "Bhidu J\n";
fwrite($myfile, $txt);

#echo fread($myfile,filesize($myfile));

fclose($myfile);


# To delete the File

/*
$status=unlink('nwf.txt');    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  
*/
?>
