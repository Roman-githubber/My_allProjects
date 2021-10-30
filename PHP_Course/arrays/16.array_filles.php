<?php

$name = ["Sanjay","Raj","Mohan","kislay"];
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];

// $newArray = array_fill_keys($a,"testing");

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

//* array_fill

$newArray = array_fill(-2,6,"Testing");
echo "<pre>";
print_r($newArray);
echo "</pre>";


?>