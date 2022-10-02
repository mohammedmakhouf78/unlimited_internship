<?php

function insertionSort(&$arr)
{
    for($i = 1; $i < count($arr); $i++)
    {
        for($j = $i; $j > 0; $j--)
        {
            if($arr[$j] < $arr[$j - 1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
            }
            else
            {
                break;
            }
        }
    }
}