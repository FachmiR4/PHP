<?php
include "connection.php";

$nama_prdk = $_POST["prdk"];
$warna = $_POST["wrn"];
$harga = $_POST["hrg"];
$trasmisi = $_POST["tms"];

$id = $_POST['id_prdk'];

$query = "update tbl_product set product_name = '$nama_prdk', product_color = '$warna', 
harga = '$harga' where id = '$id'";

$exec = mysqli_query($conn, $query);

if($exec){
    echo "Berhasil diedit";
    echo "<a href='data_mobil.php'>kembali</a>";
}else{
    echo "gagal diedit";
    echo "<a href='data_mobil.php'>kembali</a>";
}


?>