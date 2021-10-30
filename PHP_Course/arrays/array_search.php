<?php

// in_array and array_search();

$a =["Sanjay","Aman","Rehman","Karan","55","Raj"];
$a =["a"=>"Sanjay","b" =>"Aman","Rehman","Karan","55","Raj"];


// if(in_array(55,$a , true)) echo "Find sucessfully";
// else echo "Not Found";


// echo array_search('Raj',$a);

// multidimenstional array
$alice = [
    "name" => "Alice",
    "email"=>"alice@gmail.com",
    "height"=>1.90,
];
$carol = [
    "name" => "Carol",
    "email"=>"carol@gmail.com",
    "height"=>1.70,
];
$people = [$alice ,$carol];


// if(in_array($alice,$people , true)) echo "Find sucessfully";
// else echo "Not Found";

echo array_search($carol,$people);

?>