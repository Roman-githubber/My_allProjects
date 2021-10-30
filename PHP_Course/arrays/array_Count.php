<?php


//* count and size of for array length;

$a =["Sanjay","Aman","Rehman","Karan","Raj"];

// echo "Count" .  count($a);
// echo "<br/>";
// echo sizeof($a);



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

$people =[$alice,$carol];

///************** */
// $food = array(
//     'fruits' => array("orange","banana","apple"),
//     'veggies' => array("carrot","collard","pea")
// );

// /echo count($food,1);
// echo count($food["fruits"]);

//*********************** */
 $length =  count($a);
//  for($i = 0 ; $i < $length;$i++){
//     echo $a[$i], ", "; 
//  }
// echo "$length\n";
// $n = 2;
// if($length < $n)echo "Array is less than $length and $n";
// else echo "Array is greater"


//* array_count_value

echo "<pre>";
print_r(array_count_values($a));
echo "</pre>";
?>