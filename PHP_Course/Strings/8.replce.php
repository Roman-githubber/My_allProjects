<?php

$a = "i love Php here. I love php too";
$find = ["php","love"];
$replace = ["javascript","live"];


// echo str_replace("php","javascript",$a);
// echo str_replace($find,$replace,$a);


//* case insensitive
// echo str_ireplace($find,$replace,$a);

$color =["blue","red","yellow","green","white"];


// echo "<pre>";
// print_r(str_replace("red","pink",$color));
// echo "</pre>";

//*========== substring replace

// echo substr_replace($a," react.js",6 , 9);

//* strtr for character
$arr = array("Hello" => "Hi", "world" => "earth");
echo strtr("Hello wolrd",$arr);
// echo strtr($a,"i love","I live");

?>