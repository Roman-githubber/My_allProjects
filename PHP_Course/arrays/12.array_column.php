<?php

// $a = ["a"=> "Sanjay","b"=>"Raj"];
// $b = ["a"=> "Salman","b"=>"khan"];
// $c = ["a"=> "Raj","b"=>"Kumar"];
// $multi = [$a,$b,$c];
// $newArray = array_column($multi , "b","a");


// array chunk
$a = ["cars","bikes","trucks","cycles","triCycles"];
$names = ["a"=> "Sanjay","b"=>"Raj" ,"c"=> "Rohan"];
$newArray = array_chunk($names, 2,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>