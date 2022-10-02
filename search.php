<?php



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