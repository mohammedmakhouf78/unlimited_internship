<?php


$arr = [1,2,3,4,5];

if("ahmed;alksjf;askj;fklasj;fasdjklf" > "b")
{
    echo "true";
}
else
{
    echo "false";
}

// bubbleSort($arr);

// var_dump($arr);

function bubbleSort(&$arr)
{
    $isSorted = true; // flag
    $iteration = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        for($j = 0; $j < (count($arr) - 1 - $i); $j++)
        {
            $iteration++;
            echo "***********";
            echo "<br>";
            echo $iteration;
            echo "<br>";
            echo "***********";
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

function binarySearch(&$arr, $target)
{
    $iteration = 0;
    $start = 0;
    $end = count($arr) - 1;

    while($start <= $end)
    {
        $iteration++;
        echo "***********";
        echo "<br>";
        echo $iteration;
        echo "<br>";
        echo "***********";
        $mid = intval(($start + $end) / 2);
       
        if($arr[$mid] == $target)
        {
            return $mid;
        }

        else if($arr[$mid] < $target)
        {
            $start = $mid + 1;
        }
        else
        {
            $end = $mid - 1;
        }
    }
    return "Not Found";
}


// return the index of the number if the number exists
// if not eixists return "Not Found"
function linearSearch(&$arr, $num)
{
    $iteration = 0;
    foreach($arr as $index => $item)
    {
        $iteration++;
        echo "***********";
        echo "<br>";
        echo $iteration;
        echo "<br>";
        echo "***********";
        if($item == $num)
        {
            return $index;
        }
    }
    return "Not Found";
}