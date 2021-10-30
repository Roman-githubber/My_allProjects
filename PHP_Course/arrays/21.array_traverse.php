<?php
$a = [ "Sanjay","Aman","Mohan"];
// $b = ["Sanjay","Raj","Mohan"];

// echo "Current" ,"-". current($a) ."<br/>";
// echo "key"."-". key($a)."<br/>";
// echo "Pos"."-". pos($a)."<br/>";


// next($a);
// next($a);
// prev($a);
end($a);
echo "<B> Current now </B>" . current($a) ."<br/>"  ;
echo "key"."-". key($a)."<br/>";


//* each
echo "<pre>";
// $newArr=  each($a);
echo "</pre>";


//* reset
reset($a);
print_r($a);
?>