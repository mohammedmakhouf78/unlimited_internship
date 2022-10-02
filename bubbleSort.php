<?php

// [5,4,3,2,1]
// [4,5,3,2,1]
// [4,5,3,2,1]
// [4,3,5,2,1]
// [4,3,2,5,1]
// [4,3,2,1,5]

// [3,4,2,1,5]
// [3,2,4,1,5]
// [3,2,1,4,5]
$arr = [5,4,3,2,1];

bubbleSortRecursive($arr, count($arr) - 1);

var_dump($arr);

function bubbleSortRecursive(&$arr, $count)
{
    if($count == 0)
    {
        return;
    }
    for($j = 0; $j < $count; $j++)
    {
        if($arr[$j] > $arr[$j + 1])
        {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
    bubbleSortRecursive($arr, $count - 1);
}

function bubbleSort(&$arr)
{
    $isSorted = true; // flag
    for($i = 0; $i < count($arr); $i++)
    {
        for($j = 0; $j < (count($arr) - 1 - $i); $j++)
        {
            if($arr[$j] > $arr[$j + 1])
            {
                $isSorted = false;
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
        if($isSorted)
        {
            return;
        }
    }
}