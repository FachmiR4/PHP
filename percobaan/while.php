<?php
$x = 0;

while($x <= 10){
if($x % 2 == 1){
   echo "ini bilangan Ganjil : $x"."<br>";
}else{
    echo "ini bilangan Genap : $x"."<br>";
}
$x++;
}
?>

<?php
// nasted while loop
$i = 1;
while($i < 3){
    $j = 1;
    while($j < 4){
        echo $i.":".$j."<br>";
        $j++;
    }
    $i++;
}

?>