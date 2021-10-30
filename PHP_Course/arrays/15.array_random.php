<?php

$name = ["Sanjay","Raj","Mohan","kislay"];
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];

// $newArray = array_rand($a);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// random more than one
// $newArray = array_rand($name,2);
// echo $name[$newArray[0]] ."<br>";
// echo  $name[$newArray[1]];

//* shuffle changes the existing array




shuffle($a);
print_r($a);


?>