<?php
$str = "A 'quote' is <b>Bold</b>  ,Hello <i> Earth </i>";
$newStr ="This world is good";
// $newStr =  htmlentities($str);
// echo $newStr;

// echo "strip   " . strip_tags($str , "<b>");



//* word wrap

echo wordwrap($newStr,4,"<br>",true);

?>