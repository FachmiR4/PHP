<?php 
function sum1(...$num){
    $carry = 0;
    foreach($num as $n){
        $carry += $n;
    }
    return $carry;

}
echo sum1(1,2,3,4,5,6);
function sum(...$num){

    print_r(array_reduce($num, fn($carry, $n) => $carry + $n ));
    // return array_reduce($num, fn($carry, $n) => $carry + $n );

}
echo "<pre>";
var_dump(sum(1,2,3,4,5,6));
echo "<pre>";

?>