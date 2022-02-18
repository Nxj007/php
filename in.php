<?php  
    class Developer  
    {}  
    class Programmer  
    {}  
    //creating an object of type Developer  
    $charu = new Developer();  
      
    //testing the type of object  
    if( $charu instanceof Developer)  
    {  
        echo "Charu is a developer.";  
    }  
    else  
    {     
        echo "Charu is a programmer.";  
    }  
    echo "</br>";  
    var_dump($charu instanceof Developer);  
    var_dump($charu instanceof Programmer);.  
?>  