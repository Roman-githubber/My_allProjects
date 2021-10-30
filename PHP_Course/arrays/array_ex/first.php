<?php


$article = ["FIrst post","Another post", "Read this"];

// var_dump($article);


//assosoative arrays


$articles2 = ["first" => "First post",
 "four" => "Another post",
 "six" => "Read This"];


// var_dump($articles2["six"]);


// vaiables in array

$count = 3;
$price = 3.4;

$newArray = [$count,$price];

// var_dump($newArray);



// foreach($article as $peps){
//     echo $peps ," , " ; 
// }

foreach($articles2 as $index => $peps ){
    echo $index .' - '. $peps," ," ; 
}