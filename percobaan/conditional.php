<?php 
$age = 20;

// perbedaan antara == dan ===
// if($age == 20){ // TRUE
//     echo "1"."<br>";
// }
// if($age == "20"){ // true
//     echo "2"."<br>";
// }

$age == 20; // true
$age == "20"; // true

$age === 20;// true
$age === "20";// false

// ternary if     True   | False
echo $age < 19 ? 'young' : 'old';

// short  ternary
$myAge = $age ?: 22;
echo "<pre>";
var_dump($myAge);
echo "</pre>";

// null coalescing operator
$myName = isset($name) ? $name : "john";
$myName = $name ?? 'john';

echo $myName;


?>