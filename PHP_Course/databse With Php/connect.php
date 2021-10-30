<?php

$host = "localhost";
$name ="cmsFirst";
$user ="cms_www";
$password ="belivethat@06";

$con = mysqli_connect($host,$user,$password,$name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    echo "Error";
    die();
}
echo "Connected successfully";
$query = "SELECT *  FROM articles";
$result =  mysqli_query($con,$query);
// die();
if($result === false){
    echo mysqli_error($con);
}else {
    $article =  mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo "<pre>";
   print_r($article);
    echo "</pre>";
}

?>