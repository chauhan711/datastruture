<?php
//Selection sort
//answer => 5,11,12,22,25,34,64,90
$elementContainer = [64, 34, 25, 5, 22, 11, 90, 12];
for($i=0;$i<count($elementContainer);$i++){
    for($j=0;$j<count($elementContainer);$j++){
        $swap1='';
        $swap2=''; 
        if($elementContainer[$j] < $elementContainer[$i]){
            $swap1 = $elementContainer[$j];
            $swap2 = $elementContainer[$i];
        }
    }  
}
?>