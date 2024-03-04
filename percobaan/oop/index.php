<?php 
require_once ("oop.php");
require_once ("oop_2.php");

$p = new person('fahmi', 'ramadhan');
$p->setAge(30);
echo "<pre>";
var_dump($p);
echo "</pre>";
echo $p->getAge();

$p2 = new person('sarah', "munah");
echo "<pre>";
var_dump($p2);
echo "</pre>";
echo $p->getCounter();

$p3 = new person('nana', "tele");
echo "<pre>";
var_dump($p3);
echo "</pre>";
echo $p3->getCounter();

$p4 = new student('nana', "tele", "1213");
echo "<pre>";
var_dump($p4);
echo "</pre>";
echo $p3->getCounter();

?>