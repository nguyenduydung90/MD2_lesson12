<?php
$arr=[];
for ($i=0;$i<10;$i++){
    array_push($arr,rand(1,100));
}
function insertionSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        $temp = $arr[$i];
        $j=$i-1;
        while ($j>= 0 && $arr[$j] > $temp) {
            $arr[$j +1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $temp;
    }
    return $arr;
}

echo '<pre>';
print_r(insertionSort($arr));