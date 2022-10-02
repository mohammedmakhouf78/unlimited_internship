<?php

//variable function
//callback function
//higher order functions
//closure
//anonymous function
//recursion

// function calculator($a, $b,callable $callback)
// {
//     echo $callback($a, $b);
// }



// calculator(10,15,function($x, $y){
//     return $x * $y;
// });


$arr = [1,4,6,2,3,5];

// array_map(function($element){
//     var_dump($element);
//     echo "<br>";
// },$arr);

function myMap($arr, callable $callback)
{
    $newArr = [];
    foreach($arr as $item)
    {
        $newArr[] = $callback($item);
    }
    return $newArr;
}

$x = myMap($arr,function($element){
    return $element * 2;
});


function myFilter($arr, callable $callback)
{
    $newArr = [];
    foreach($arr as $item)
    {
        if($callback($item) == true)
        {
            $newArr []= $item;
        }
    }
    return $newArr;
}

function isEven($element)
{
    return $element % 2 == 0;
}

$isEven = function($element)
{
    return $element % 2 == 0;
};

$num = 100;

$y = myFilter($arr, function($element) use($num)
    {
        $x = $num;
        return $element % 2 == 0;
    });

var_dump($y);

$arr = [
    'getName' => function(){

    },
    "getAge" => function(){
        
    },
];