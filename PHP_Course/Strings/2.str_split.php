<?php
$a =  'hello world';

// $newArray =  str_split($a,2);

//* chunks split
$newArray = chunk_split($a,3,"__");


echo"<pre>";
print_r($newArray);
echo"</pre>";



?>