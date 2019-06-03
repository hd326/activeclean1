<?php
//$array1 = [1,2,3,4,5,6,7];
//$array2 = [3,4,8,0];
//$merge = array_merge($array1,$array2);
//$result = array_unique($merge);
//print_r($result);

//$array = [1,2,3,4,5,6];
//$result = 0;
//foreach (array_reverse($array) as $key => $item; $key++) {
//    $result.=$array[$key];
//    $keyItem = $key + $item;
//}
//echo $keyItem;

//$array = [1,2,3,4,5,6];
//$result = 0;
//for ($x=0;$x<=count($array); $x++){
//    $result +=$array[$x];
//}
//echo $result;

$array1 = ['c','f','a','g','1','0','Z','A'];
$result = sort($array1);
foreach ($result as $ok => $hi) {
    echo $ok;
}

$array1 = [1,2,3,4,5,6,7];
$array2 = [3,4,8,0];
$merge = array_merge($array1, $array2);
$result = array_unique($merge);
print_r($result);
?>