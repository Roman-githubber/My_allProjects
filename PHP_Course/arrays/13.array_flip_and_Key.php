<?php
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];
$b = ["Sanjay","Raj","Mohan"];


// $newArray = array_flip($b);
$newArray = array_change_key_case($a,CASE_UPPER);


echo "<pre>";
print_r($newArray);
echo "</pre>";


?>