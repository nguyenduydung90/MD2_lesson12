<?php
$arr=[];
for ($i=0;$i<10;$i++){
    array_push($arr,rand(1,100));
}


function selectionSort($arr){
    for ($i=0;$i<count($arr)-1;$i++){
        for ($j=$i+1;$j<count($arr);$j++){
            if ($arr[$i]<$arr[$j]){
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
            }
        }
    }return $arr;
}

echo '<pre>';
print_r(selectionSort($arr));
