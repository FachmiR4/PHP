<?php
include "connection.php";

$nama_prdk = $_POST["prdk"];
$warna = $_POST["wrn"];
$harga = $_POST["hrg"];
$trasmisi = $_POST["tms"];

$query = "insert into tbl_product(product_name, product_color, harga)
          values('$nama_prdk', '$warna', '$harga')";

$exec = mysqli_query($conn, $query);

if($exec){
    echo "berhasil di simpam!"; 
    echo "<a href='data_mobil.php'>kembali</a>";
}else{
    echo "gagal di simpan";
}

?>