<?php

//array sorting

// $name = ["Sanjay","Raj","Mohan","Kislay","Aman"];
// $a =[ 1,2,3,4];
// $b = ["a"=> "Sanjay","b"=>"Kislay","c"=>"Raj"];


// sort($b);
// rsort($a);
//for associative

// asort($b);
// arsort($b);


//* key sorting
// ksort($b);
// krsort($b);

// echo"<pre>";
// print_r($b);
// echo"</pre>";



//******========================================= */

// for natural order sort 
$array1 = ["img12.png","Img10.png","img1.png","img2.png"];

// natsort($array1);
// natcasesort($array1);

// echo"<pre>";
// print_r($array1);
// echo"</pre>";



///*****************Arrya multi sort */


$a = [ "Sanjay","Aman","Mohan"];
$b = ["Sanjay","Raj","Mohan"];

array_multisort($a,$b);


// echo"<pre>";
// print_r($a);
// echo"</pre>";

// echo"<pre>";
// print_r($b);
// echo"</pre>";


///* array revese

$newRev = array_reverse($a);

echo"<pre>";
print_r($newRev);
echo"</pre>";

?>