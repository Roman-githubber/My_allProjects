<?php
$a ="How . are you .";
$strings =["This","is","an","example"];


//*explode

 $newArray= explode("." ,$a,2);
echo"<pre>";
print_r($newArray);
echo"</pre>";

//implode
// $impArray = implode("-", $strings);
$impArray = implode("<br/>", $strings);
$impArray = join("<br/>", $strings);

echo"<pre>";
print_r($impArray);
echo"</pre>";



?>