<?php
function findMax($arr){
    $max=$arr[0];
     for($i=0;$i<count($arr);$i++){
          if ($arr[$i]>$max){
              $max = $arr[$i];
          }
         }
     return $max;
}
$number=[2,3,4,5,100];
foreach ($number as $num){
    echo $num ." ";
}
$maxValue = findMax($number);
echo "<br>";
echo " Sô lớn nhất trong mảng = ".$maxValue;