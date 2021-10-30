<?php
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];
$b = ["a"=> "Sanjay","c"=>"Rahul"];
$c = ["a"=> "Sanjay","c"=>"Rahul"];



//  $newArray =  array_intersect($a,$b,$c);
// $newArray =  array_intersect_key($a,$b);
// $newArray =  array_intersect_assoc($b,$c);




function campareFunc($a,$b){
if($a === $b){
  return 0;
 }
 return ($a > $b)? 1: - 1;
}
function campareVal($a,$b){
if($a === $b){
  return 0;
 }
 return ($a > $b)? 1: - 1;
}
// $newArray =  array_intersect_uassoc($b,$c,"campareFunc");
$newArray =  array_uintersect_uassoc($b,$c,"campareFunc","campareVal");


echo "<pre>";
print_r($newArray);
echo "</pre>";


?>