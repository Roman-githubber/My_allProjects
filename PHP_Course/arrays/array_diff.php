<?php
$a = ["a"=> "Sanjay","b"=>"Raj","c"=>"Mohan"];
$b = ["a"=> "Sanjay","d"=>"Raj"];
$c = ["a"=> "Sanjay","c"=>"Raj"];

// $newArray = array_diff($a,$b,$c);
// $newArray = array_diff_key($a,$b,$c);
// $newArray = array_diff_assoc($a,$b,$c);

function campare($a,$b){
if($a == $b)return 0;
return ($a > $b)?1 : -1;
}
function val($a,$b){
if($a == $b)return 0;
return ($a > $b)?1 : -1;
}

    // $newArray = array_diff_uassoc($a,$b,"campare");
    // $newArray = array_diff_ukey($a,$b,"campare");
    // $newArray = array_udiff($a,$b,"campare");
    $newArray = array_udiff_uassoc($a,$b,"campare",'val');

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>