<?php
include ("connection.php");
$koneksi = new database();

$action = $_GET['action'];
$image = $_FILES['img'] ?? null;
if(!is_dir('images')){
    mkdir('images');
}

if($action == "tambahData"){
    $code = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $str = '';
    for($i = 0; $i < 8; $i++){
        $index = rand(0, strlen($code)-1);
        $str .= $code[$index];
    }
    $imagePath = '';
    if($image){
        $imagePath .= "images/".$str.'/'.$image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
    $exec = $koneksi->tambah_data($_POST['jdl_buku'], 'app/'.$imagePath, $_POST['jml']);
    if($exec){
       header("location: ../index.php");
    }
}elseif($action = "hapusData"){
    $id = $_GET['id'];
    $exec = $koneksi->Hapus_data($id);
    if($exec){
        header("location: ../index.php");
    }
}

?>