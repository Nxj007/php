<form method="post">  
        Enter a Character: <input type="text" name="input"><br><br>  
        <input type="submit" name="submit" value="Submit">  
        </form>  

<?php      
    # $ch = 'JJ';
    if($_POST){
    $input=$_POST['input'];
    $a = array ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    foreach($a as $key){
    if($input==$key){
    # $value=TRUE;
    echo("It's a Vowel <br>" . $key);
    }
    else {  
        echo 'The Vowel is  <br>'. $input;  
        }   
}
    }
    /*if (isset($value) && $key) {  
        echo 'This is not a Vowel <br>'. $input;  
    } 
    */
    /*
    switch ($input)  
    {     
        case 'a':   
            echo "Given character is vowel";  
            break;  
        case 'e':   
            echo "Given character is vowel";  
            break;  
        case 'i':   
            echo "Given character is vowel";  
            break;  
        case 'o':   
            echo "Given character is vowel";  
            break;    
        case 'u':   
            echo "Given character is vowel";  
            break;  
        case 'A':   
            echo "Given character is vowel";  
            break;  
        case 'E':   
            echo "Given character is vowel";  
            break;  
        case 'I':   
            echo "Given character is vowel";  
            break;  
        case 'O':   
            echo "Given character is vowel";  
            break;  
        case 'U':   
            echo "Given character is vowel";  
            break;  
        default:   
            echo "Given character is consonant";  
            break;  
    } 
} */
?>    