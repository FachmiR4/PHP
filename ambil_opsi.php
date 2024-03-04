<?php
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "belajar_oop";
	var $koneksi = "";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
}
// Simulasikan data dari database
$koneksi = new database();
$query = "select * from tbl_peminjaman as a 
join tbl_dtl_peminjaman as b on b.id_peminjaman = a.id 
where a.id_anggota = '1' AND b.STATUS = '1'";
$exec = mysqli_query($koneksi->koneksi,$query);
$data1 = mysqli_fetch_array($exec);
$dataOPtion = '';
foreach($data1 as $data){
    $dataOPtion .= $data['id'];
}

// Keluarkan data sebagai respons JSON
header('Content-Type: application/json');
echo json_encode($data1);
?>
