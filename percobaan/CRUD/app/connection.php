<?php
class database{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "perpustakaan";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    }

    function tampil_data()
    {
        $exec = mysqli_query($this->koneksi, "select * from tbl_buku");
        while($row = mysqli_fetch_array($exec)){
            $result[] = $row;
        }
        return $result;
    }
    
    function tambah_data($jdl_buku, $gambar_buku, $qty)
    {
        $query = "insert into tbl_buku (judul_buku, gambar_buku, qty) values ('$jdl_buku', '$gambar_buku', '$qty')";
        mysqli_query($this->koneksi, $query);

    }
    function Hapus_data($id)
    {
        $query = "delete from tbl_buku where id = $id";
        mysqli_query($this->koneksi ,$query);
    }

}

?>