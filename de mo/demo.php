<?php
function LinearSearch($arr,$number){
    for ($i=0;$i<count($arr);$i++){
        $index=-1;
        if ($arr[$i]==$number){
            $index = $i;
            break;
        }
    }
    return $index;
}

$arr = range( 1,100);
shuffle($arr);
echo "<pre>";
print_r($arr);