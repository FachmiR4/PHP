<?php
        include "connection.php";

        $query = "select * from petugas_perpus";

        $exec = mysqli_query($conn, $query);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}
* {margin: 0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  color: #f2f2f2;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.dropbtn {
  padding: 14px 16px;
  font-size: 16px;
  border: none;
  background-color: #333;
  color: #ddd;
}

.dropbtn:hover{
background-color: #ddd;
  color: black;
}

.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}
.logout{
   float: right; 
}


.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


</style>
</head>
<body>
    <div class="topnav">
        <a href="#home">Home</a>
        <div class="dropdown">
        <button class="dropbtn">Data master</button>
        <div class="dropdown-content">
        <a href="#">Daftar Buku</a>
        <a href="#">Data Petugas</a>
        <a href="#">Kategori</a>
        <a href="#">Penerbit</a>
        <a href="#">Rak</a>
        </div>
        </div>
        <div class="dropdown">
        <button class="dropbtn">Transaksi</button>
        <div class="dropdown-content">
        <a href="#">Peminjaman Buku</a>
        <a href="#">Pengembalian Buku</a>
        </div>
        </div>
        <a href="#conta ct">Data Pengunjung</a>
        <a href="#about" class="logout">Logout</a>
    </div>
    <div class="container">
    <a href="#" class="">Tambah Data</a><br><br>
    <table border="1" action="">
        <thead class="header-1">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Nama 
                </td>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    Telepon
                </td>
                <td>
                    Username
                </td>
                <td>
                    Password
                </td>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($exec)){
                echo "<tr>";
                echo"<td>".$row["id"]."</td>";
                echo"<td>".$row["nama"]."</td>";
                echo"<td>".$row["jns_kelamin"]."</td>";
                echo"<td>".$row["alamat"]."</td>";
                echo"<td>".$row["tlpn"]."</td>";
                echo"<td>".$row["username"]."</td>";
                echo"<td>".$row["password"]."</td>";
                echo "<td>"."<a class='button-1' href='form_edit.php?nim=$row[id]'>edit</a> <a class='button-2' href='form_delete.php?nim=$row[id]'>delete</a>"."</td>";
                echo "</tr>";
            }?>
        </tbody>
    </table>
    </div>
</body>
</html>
