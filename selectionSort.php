<?php

// [5,4,3,2,1]
// [1,4,3,2,5]
// [1,2,3,4,5]
// [1,2,3,4,5]

$arr = [5,4,3,2,1,6,1,4,6,8];
selectionSortRecursive($arr, count($arr) - 1);
var_dump($arr);

function selectionSortRecursive(&$arr, $end)
{
    if($end == 0)
    {
        return;
    }
    $maxIndex = getMaxIndex($arr,0,$end);
    $temp = $arr[$end];
    $arr[$end] = $arr[$maxIndex];
    $arr[$maxIndex] = $temp;
    selectionSortRecursive($arr, $end - 1);
}

function selectionSort(&$arr)
{
    for($i = count($arr) - 1; $i >= 0; $i--)
    {
        $maxIndex = getMaxIndex($arr,0,$i);
        $temp = $arr[$i];
        $arr[$i] = $arr[$maxIndex];
        $arr[$maxIndex] = $temp;
    }
}

function getMaxIndex(&$arr, $start, $end)
{
    $max = $start;
    for($i = $start + 1; $i <= $end; $i++)
    {
        if($arr[$i] > $arr[$max])
        {
            $max = $i;
        }
    }
    return $max;
}