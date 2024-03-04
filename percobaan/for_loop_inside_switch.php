<?php

$a = array(array('0', '10', '200', '0'), array('11', '20', '20', '1'), array('20', '50', '25', '1'), array('50', '100', '5000', '0'));

$quantity = 25;

$count = count($a);


foreach($a as $item) {
switch($quantity) {

        case ($quantity >$item[0] && $quantity < $item[1]) :
            echo "Discount Available for Quantity > ".$item[0]." and < ".$item[1]."<br>";
            break;
       default:
        echo 'No Discount'."<br>";
        break;
}
    }
?>