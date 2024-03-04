<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif}
* {box-sizing: border-box;}

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
</body>
</html>

</html>