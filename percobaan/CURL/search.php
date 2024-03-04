<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "belajar_oop";

$koneksi = mysqli_connect($servername, $username, $password, $db);


?>
<html>
    <head>
    <link rel="stylesheet" href="app.css">
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
        <a href="#" class="btn btn-primary me-md-3">Masukan Data</a>
    </div><br>
    <table class="table table-light table-hover">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul Buku</th>
            <th>jumlah</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="gambar/test.png" alt="" class="thum-image"></td>
            <td>hshdakdas</td>
            <td>12</td>
            <td>1212</td>
        </tr>
    </table>
    </body>
</html>