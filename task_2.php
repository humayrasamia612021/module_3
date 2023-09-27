<?php
function removeEven($numbers) {
    
    foreach ($numbers as $number) {
       
        if ($number % 2 != 0) {
            
            echo $number . ' ';
        }
    }
}
$numbers = range(1, 10);

removeEven($numbers);
?>
