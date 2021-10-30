<?php
    // if(!isset($_COOKIE[$cookie_name])){
    //     echo "cookie not set";
    // }
echo "Cookies " . $_COOKIE["user"];

setcookie("user","", time() - (86400), "/" );

?>