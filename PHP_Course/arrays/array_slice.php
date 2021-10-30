<?php

$color = ["red","blue","green","orange","purple","yellow","cyan","white"];
$fruit =["grapes","apple"];
// array slice

// array_slice($color,2,3);
// echo "<pre>";
// print_r(array_slice($color,2,3));
// echo "</pre>";



// array splce 

// array_splice($color,1);
// echo "<pre>";
// print_r($color);
// echo "</pre>";


array_splice($color,1,3,$fruit);

echo "<pre>";
print_r($color);
echo "</pre>";
?>