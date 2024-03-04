<?php
include "connection.php";


$data = "select a.id, a.detail, 
b.*, c.* from tbl_spesifikasi a
join tbl_performa b on b.id = a.id
JOIN tbl_kapasitas c on c.id = a.id";

$spek_mbil = mysqli_query($conn, $data);

?>
<table border="1">
    <tr>
        <td>
            detail
        </td>
        <td>
            Jenis Bahan bakar
        </td>
        <td>
            Tenaga
        </td>
        <td>
            Kapasitas Mesin
        </td>
        <td>
            Torsi
        </td>
        <td>
            Kapasitas Tangki Bahan Bakar (liter)
        </td>
        <td>
            Jarak pijak roda belakang
        </td>
        <td>
            Jarak Sumbu Roda
        </td>
        <td>
            Radius putar
        </td>
        <td>
            Kapasitas Tempat Duduk
        </td>
        <td>
            Jarak pijak roda depan
        </td>
        <td>
            Panjang
        </td>
        <td>
       `    Tinggi
        </td>
        <td>
            Ground Clearance
        </td>
        <td>
            Jumlah Pintu
        </td>
    </tr>
    <?php
    while( $row = mysqli_fetch_array($spek_mbil)){
        echo "<tr>";
        echo "<td>".$row["detail"]."</td>";
        echo "<td>".$row["jns_bahan_bakar"]."</td>";
        echo "<td>".$row["tenaga"]."</br>";
        echo "<td>".$row["kapasitas_mesin"]."</td>";
        echo "<td>".$row["torsi"]."</td>";
        echo "<td>".$row["kpsts_tngk_bensin"]."</td>";
        echo "<td>".$row["jrk_pijak_roda_blkg"]."</td>";
        echo "<td>".$row["jarak_sumbu_roda"]."</td>";
        echo "<td>".$row["radius_putar"]."</td>";
        echo "<td>".$row["kapasitas_tmpt_duduk"]."</td>";
        echo "<td>".$row["jrk_pijak_roda_dpn"]."</td>";
        echo "<td>".$row["panjang"]."</td>";
        echo "<td>".$row["tinggi"]."</td>";
        echo "<td>".$row["ground_clearance"]."</td>";
        echo "<td>".$row["jlm_pintu"]."</td>";

    }
    ?>

</table>