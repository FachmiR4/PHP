<?php
include 'connection.php';

$id = $_GET['id'];

$query = "select product_name, product_color, harga from tbl_product where id='$id'";

$exec = mysqli_query($conn, $query);
 
$nama = '';
$warna = '';
$harga = '';
while($row=mysqli_fetch_array($exec)){
    $nama .= $row['product_name'];
    $warna .= $row['product_color'];
    $harga .= $row['harga'];
}

?>

<form method="POST" action="proses_edit.php">
  <label for="">Nama Product:</label><br>
  <input type="text" id="prdk" name="prdk" value="<?php echo $nama; ?>"><br>
  <input type="hidden" id="id_prdk" name="id_prdk" value="<?php echo $id; ?>"><br>
  <label for="">warna:</label><br>
  <input type="text" id="wrn" name="wrn" value="<?php echo $warna; ?>"><br><br>
  <label for="">Harga:</label><br>
  <input type="text" id="hrg" name="hrg" value="<?php echo $harga; ?>"><br><br>
  <label for="">Transmisi:</label><br>
  <input type="text" id="tms" name="tms"><br><br>
  <input type="submit" value="Simpan">
</form> 