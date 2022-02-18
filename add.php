<?php  
function add(...$numbers) {  
    $sum = 10;  
    foreach ($numbers as $n) {  
        $sum += $n;  
    }  
    return $sum;  
}  
  
echo add(1, 2, 3, 4, 5, 7,6);  
?>  