<?php
function findMin($arr): int
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
function findMax($arr): int
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}


$nums = [0, -5, 6, 9, -4, 30, 65, 100];
foreach ($nums as $num) {
    echo $num . " ";
}

$maxValue = findMax($nums);
echo "</br>";
echo "the max value is:" . $maxValue;

$minValue = findMin($nums);
echo "</br>";
echo "the min value is: " . $minValue;

