<?php
include ("app/connection.php");
$koneksi = new database();
$data = $koneksi->tampil_data();

?>
<html>
    <head>
    <link rel="stylesheet" href="app/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar bg-body-tertiary mb-6">
        <div class="container-fluid ">
            <form class="d-flex">
            <input class="form-control me-2" type="text"  name="search" value="" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="app/tambah_data.php" class="btn btn-primary me-md-3">Tambah Data</a>
    </div><br>
    <table class="table table-light table-hover">
        <tr>
            <th>id</th>
            <th>Gambar</th>
            <th>Judul Buku</th>
            <th>jumlah</th>
            <th>Action</th>
        </tr>
        <tr>
            <?php foreach($data as $tampilan){ ?>
            <td><?php echo $tampilan['id']; ?></td>
            <td><img src="<?php echo $tampilan['gambar_buku']; ?> " alt="" class="thum-image"></td>
            <td class="align-middle"><?php echo $tampilan['judul_buku']; ?></td>
            <td class="align-middle"><?php echo $tampilan['qty']; ?></td>
            <td class="align-middle"><a href="" class="btn btn-primary me-md-1">Edit</a>
            <a href="app/proses.php?action=hapusData&&id=<?php echo $tampilan['id']; ?>" class="btn btn-danger">Hapus</a></td>
        </tr>
    <?php     }?>
    </table>
    </body>
</html>