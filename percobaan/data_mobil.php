<?php
include "connection.php";

$qwery = "SELECT 
a.*
FROM tbl_product a";

$execute = mysqli_query($conn, $qwery); // untuk eksekusi query mysql 

?>
<a href="form_input.php">insert data</a>
<table border="1">
    <tr>
        <td>
            Nama Produk
        </td>
        <td>
            Warna
        </td>
        <td>
            Harga
        </td>
        <td>
            action
        </td>
    </tr>
    <?php
        while($row = mysqli_fetch_array($execute)){ // untuk fetch data 
            echo '<tr>';
            echo '<td>'.$row['product_name'].'</td>';
            echo '<td>'.$row['product_color'].'</td>';
            echo '<td>Rp '.number_format($row['harga']).'</td>';
            echo "<td><a href='form_edit.php?id=$row[id]'>Edit</a>|<a href='form_delete.php?id=$row[id]'>Hapus</a></td>";
            echo '</tr>';
        }
        
    ?>
<?php
?>

    
</table>
