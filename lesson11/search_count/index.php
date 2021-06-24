<?php
function リピータ($arr,$num):int
{
    $count=0;
    for ($i=0;$i<count($arr);$i++){
        if($num==$arr[$i]){
            $count++;
        }
    }
    return $count;
}
$arr=[1,2,3,4,5,6,9,8,7,5,6,2];
echo リピータ($arr,6);
