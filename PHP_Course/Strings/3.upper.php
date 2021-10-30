<?php
$str ="Hello world"; 
$str2 ="kislay raj"; 

//* to lower
// $newStr = strtolower($str);

//* to upper

// $newStr= strtoupper($str);

//*lower case and uppercase first letter
// $newStr = lcfirst($str);
// $newStr = ucfirst($str2);


//* uc word makes upper case of all words
$newStr = ucwords($str2) ;


echo $newStr;


?>