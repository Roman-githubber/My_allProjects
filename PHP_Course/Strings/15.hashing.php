<?php


//* USED FOR  PASSWORD ENCYRPTION
//MD5 

$str ="kislayraj@";

echo "Original password " . $str . "<br/>";

//* here md5
echo "hexa format md5 " . md5($str,false)  . "<br/>";
echo "binary format md5 " .  md5($str,true)  . "<br/>";

if(md5($str) == "dfc48ba84392e8a4629c400d1f16faf9"){
    echo "password matched" ;
}


//* here sha1 hash

// echo "sha1 hexa " . sha1($str,false) . "<br/>";
// echo "sha1  binary  " . sha1($str,true) . "<br/>";


?>