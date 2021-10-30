<?php

$a ="orange";
$color = ["a"=> "red" , "v" =>"green","c"=> "blue"];

// extract($color ,EXTR_SKIP);
extract($color ,EXTR_PREFIX_SAME,"test");

echo "values of a : $a <br/>";
echo "values of a : $test_a <br/>";
echo "values of v : $v <br/>";
echo "values of c : $c <br/>";



//* compact 
$first ="Red";
$second ="Blue";
$third ="Green";
$N1 ="A";
$N2 ="B";

$c =["N1","N2"];

$newArray = compact("first","second","third",$c);

echo "<pre>";
print_R($newArray);
echo "</pre>";

?>