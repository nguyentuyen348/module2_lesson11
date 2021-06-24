<?php
function binarySearch(array $number, int $findNum):bool{
    $low=0;
    $high=count($number)-1;
    while ($low<=$high){
        $mid=(int)(($low+$high)/2);
        if ($numbers[$mid] > $findNum) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $findNum) {
            $low = $mid + 1;
        } else {
            return true;
        }
    }
    return false;
}
$numbers = range(1, 200, 5);

$number = 6;
if (!binarySearch($numbers, $number)) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}

$numberTwo = 500;
if (binarySearch($numbers, $numberTwo)) {
    echo "$numberTwo Found \n";
} else {
    echo "$numberTwo Not found \n";
}