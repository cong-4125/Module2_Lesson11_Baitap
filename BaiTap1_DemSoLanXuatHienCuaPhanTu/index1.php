<?php
function findCount($arr,$num){
    $count = 0;
    for ($i = 0;$i < count($arr);$i++){
        if ($arr[$i] == $num){
            $count++;
        }
    }
    return $count;
}
$arr1 = [1,2,3,4,5,5,6,5];
$number = 3;
echo findCount($arr1,$number);