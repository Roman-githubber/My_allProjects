<?php

$str = "Hello I am 'Kislay Raj'";

echo $str . "<br/>";

//* add slashes on single or double quote

// $newStr =  addslashes($str) ;

// echo $newStr . "<br/>";
// echo stripslashes($newStr);


//* add slaahses on character

$newStr = addcslashes($str,"A..K");
echo stripcslashes($newStr);

?>