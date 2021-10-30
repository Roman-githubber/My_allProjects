<?php

// array_replace and array_replace_recursice();

$a = ["orange","Apple",2=>"Banana","lichi"];
$b = ["Carrot","Onion","Eggplant"];
$c = ["red","blue","white"];

$newArray = array_replace($b,$a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// $people = array("a" => "suchi","b" => "Rohan" ,"c" => "Rahul");
// $arrayNew = array_replace($a,$people);

// echo "<pre>";
// print_r($arrayNew);
// echo "</pre>";


//* multi dimensional arrays
// $alice = [
//    ["Alice"],["alice@gmail.com"],
// ];
// $carol = [
//     [ "Carol"], ["carol@gmail.com"],
// ];
// $people = [$alice,$carol];

// $multi = array_replace_recursive($alice,$carol);

// echo "<pre>";
// print_r($multi);
// echo "</pre>";



?>