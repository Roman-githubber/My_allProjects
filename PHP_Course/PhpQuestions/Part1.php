<?php


//print two number
function sum($one,$two){
    return $one + $two ;
}

// echo sum(20  ,10);


//even or odd
function check($no){
    if($no % 2 == 0)echo "No $no is even";
    else echo "No $no is odd";
}

// check(13);

// prime number
function checkPrime($no){
    if($no <= 1)return false;

    else if($no == 2)return true;

    for($i = 2; $i < $no ;$i++){
        if($no % $i == 0){
            echo "$no is not prime";
           return false;
        }

      echo "$no is prime number";
    return true;
    }

}
//  $prime =  checkPrime(2);
// echo $prime;


// table of number
function table($no){
    
    for($i = 1 ; $i<= 10;$i++){
        echo $i * $no ," " ;
    }
}

// table(5);


// factorials
function factorial($no){
    $f = 1;
    for($i = $no ; $i > 1 ;$i--){
        $f *= $i ;
        
    }

    return $f;
}

echo factorial(5);

?>