<?php

// array key functions
$color = ["red","blue","green","orange","purple","yellow","cyan","white"];
$fruit =["first"=> "grapes","second"=>"apple" ,"third" => "banana"];

$newKeys =  array_keys($fruit);
$newFirst = array_key_first($fruit);
$newLast = array_key_last($fruit);
// $newExists = array_key_exists("first",$fruit);
$newExists = key_exists("third",$fruit);
 
// echo "<pre>";
// print_r($newKeys);
// echo "</br>"; 
// print_r($newFirst);
// echo "</br>"; 
// print_r($newLast);
// echo "</br>";
// print_r($newExists);
// echo "</pre>";

if($newExists)echo "Key found";
else echo "Not Found";

?>