<?php

// echo factorial(5);

draw(5);

// * * * * *
// * * * *
// * * *
// * *
// *

function draw($row,$col = 1)
{
    if($row == 0)
    {
        return;
    }
    if($col <= $row)
    {
        echo " * ";
        draw($row, $col + 1);
    }
    else
    {
        echo "<br>";
        draw($row - 1, 1);
    }
}

function factorial($num)
{
    if($num <= 0)
    {
        return 1;
    }
    return $num * factorial($num - 1);
}

function printNum($num)
{
    if($num == 0)
    {
        return;
    }
    printNum($num - 1);
    echo $num . "<br>";
}