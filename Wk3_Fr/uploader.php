<?php  
$target_path = "C:\wamp64\www\Coding\Wk3_Fr";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   

$imgFlType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    if (file_exists($target_path)) {
        echo "Sorry, file already exists. <br />";
        $uploadOk = 0;
    }
echo "File uploaded successfully! <br />";  
$uploadOk = 1;
}
if($imgFlType != "jpg" && $imgFlType != "png" && $imgFlType != "jpeg" && $imgFlType != "gif" ) {
            
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
    $uploadOk = 0;
  }
// Allow certain file formats
/*
if($imgFlType != "jpg" && $imgFlType != "png" && $imgFlType != "jpeg" && $imgFlType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
  $uploadOk = 0;
}
*/

 else{  
    echo "Sorry, file not uploaded, please try again!";  
}  

/*
if (file_exists($target_path)) {
    echo "Sorry, file already exists. <br />";
    $uploadOk = 0;
  }

// Allow certain file formats
if($imgFlType != "jpg" && $imgFlType != "png" && $imgFlType != "jpeg" && $imgFlType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
  $uploadOk = 0;
}
*/


?>  
