<?php

// armstrong number
// function armsStrong($no){

//     $length = 0;
//     $temp = $no; 
    
//  while($temp != 0){
//     $temp =  floor($temp/10);
//     $length  = $length + 1;   
//   }
// $t2 = $no ;  $rem ;$arms=0;
// while(t2 !=0 ){
//     $mul = 1;
//     $rem =floor($t2%10);
//  for($i = 1;$i<=$length ;$i++){
//     $mul *= $rem;
//  }

//  $arms += $mul;
//  $t2 =floor($t2/10);
// }

// if($arms == $no)echo "Its $no armsstrong number";
// else echo "$no is not armstrong"

// armsStrong(373);


//* fabonacci

function fab($n){
    $fib = 0;$no1 = 0 ;$no2 = 1;
    for($i = 1 ;$i<= $n ;$i ++){
        $fib = $no1 + $no2;
        echo $fib ," ";
        $no1 = $no2 ;
        $no2 = $fib;
    }
}
// fab(8);
// swap two no

$no1 = 10;$no2 = 20;
echo "original $no1  $no2" ;
$no1 = $no1  + $no2;
$no2 = $no1 - $no2;
$no1 = $no1 - $no2;

echo " Swaped $no1   $no2";
?>