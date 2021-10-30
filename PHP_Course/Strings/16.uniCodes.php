<?php
$a = "Hello world and earth";

$enco = convert_uuencode($a). "<br>" ;
echo $enco;

$decode =  convert_uudecode($enco)."<br>";
echo $decode;

?>