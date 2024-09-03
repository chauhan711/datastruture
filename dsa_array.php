<?php

//Bubble Sort


//Selection sort
//answer => 5,11,12,22,25,34,64,90
$elementContainer = [64, 34, 25, 5, 22, 11, 90, 12];
for($i=0;$i<count($elementContainer);$i++){
    $low = $i;
    for($j=0+$i;$j<count($elementContainer);$j++){
       if($elementContainer[$j]<$elementContainer[$low])
       {
        $low = $j;
       }
    }  
    if ($elementContainer[$i] > $elementContainer[$low]) { 
        $tmp = $elementContainer[$i]; 
        $elementContainer[$i] = $elementContainer[$low]; 
        $elementContainer[$low] = $tmp; 
    } 
}
print_r($elementContainer);
?>