<?php
include "connection.php";

$id = $_GET['id'];

$query = "delete from tbl_product where id='$id'";

$exec = mysqli_query($conn, $query);

if($exec){
    echo "Data berhasil dihapus";
    echo "<a href='data_mobil.php'>kembali</a>";
}else{
    echo "Data gagal dihapus";
    echo "<a href='data_mobil.php'>kembali</a>";
}
?>