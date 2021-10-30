<?php

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
$bob = [
    "name" => "bob",
    "email"=>"bob@gmail.com",
    "height"=>1.6,
];

// echo $alice["name"];
$people =[$alice,$carol,$bob];

// echo $people[0]["email"];
// foreach($people as $peps){
//     echo $peps["name"] ," , " ,$peps["email"] ," ," ; 
// }


// for ($row = 0; $row < 3; $row++) {  
//     for ($col = 0; $col < 3; $col++) {  
//       echo $people[$row][$col]."  ";  
//     }  
// }

$emp = [
  
 [1,"sonoo",400000],  
 [ 2,"john",500000],  
 
];  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
?>