<?php
function demPhanTu($arr,$x){
    $count=0;
     for($i=0;$i<count($arr);$i++){
             if ($arr[$i]==$x)
             {
                 $count++;
             }
         }
     return $count;
}
//echo demPhanTu([1,2,3,4,2,2],2);
$nums = [-2, 0, 5, 7, 9, -5, 30, 100,5];
$x=5;
foreach ($nums as $num){
    echo $num . " ";
}
$minValue = demPhanTu($nums,$x);
echo "<br>";
echo "Số lần xuất hiện của phần tử x trong mảng = ". $minValue;