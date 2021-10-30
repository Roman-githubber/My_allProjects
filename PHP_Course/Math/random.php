<?php

$name = ["Sanjay","Raj","Mohan","kislay",3,4,5,6,7,8,];

echo  rand()."<br/>";
echo  rand(10,20)."<br/>";
// echo  rand(0,20)."<br/>";

//mt rand

echo  mt_rand(0,20)."<br/>";

echo floor(lcg_value()* count($name))."<br/>";



?>