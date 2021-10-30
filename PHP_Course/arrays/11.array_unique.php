<?php
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan","d" =>"Sanjay"];
// $b = ["a"=> "Sanjay","d"=>"Raj"];
// $c = ["a"=> "Sanjay","c"=>"Raj"];

// value not with associative

//  $newArray = array_values($a);
 $newArray = array_unique($a);


 echo "<pre>";
 print_r($newArray);
 echo "</pre>";

?>