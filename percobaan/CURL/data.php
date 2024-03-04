<?php

// $gambar = $_POST['image'];

echo '<pre>';
var_dump($_FILES);
echo '</pre>';

$image = $_FILES['image'] ?? null;
// move_uploaded_file($image['tmp_name'], "gambar/test$i.png");
if(!is_dir('images'))
{
    mkdir("images");
    echo "sudah dibuat";

}
$n = 8;
$character = '0123456789abcdefghijklmnopqrstuvwz';
$str = '';
for($i = 0; $i < $n; $i++){
    $index = rand(0, strlen($character) - 1);
    $str .= $character[$index];
}
$imagePath = '';
if($image){
    $imagePath = "images/".$str.'/'.$image['name'];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'], $imagePath);

}

// echo $image['name']; 




// echo '<pre>';
// var_dump($_SERVER["DOCUMENT_ROOT"]);
// echo '</pre>';

// for($i = 0;  ; $i++){
// if($image){
//     move_uploaded_file($image['tmp_name'], "gambar/test$i.png");
// } 
// }

?>