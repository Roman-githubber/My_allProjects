<?php
$a = ["a"=> "Sanjay","b"=>"Aman"];
$b  = ['b'=>"Red",'c' => "Green",55,22];
$c  = ["Banana","Carrot"];

// $newArray = array_merge($a,$b,$c);
// $newArray = $a + $b ;

// echo "<pre>";
// print_r($newArray);
// echo "</pre>" ;


//array merge_recursive
$d = ["a"=> "Sanjay","b"=>"Aman"];
$e  = ['b'=>["color" => ["a","b"]],'c' => "Green",55,22];

$mArray = array_merge_recursive($d,$e);

echo "<pre>";
print_r($mArray);
echo "</pre>" ;


// array combine

// $name =["kislay","Raj"];
// $age = ["21","22"];


// $arr = array_combine($name,$age);

// echo "<pre>";
// print_r($arr);
// echo "</pre>" ;

?>