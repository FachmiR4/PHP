<?php

// menampilkan tanggal bulan sekarang (current)
// year-month-day hour:minute:secound
echo date("Y-m-d H:i:s")."<br>";

//menampilkan data sehari sebelumnya
echo date("Y-m-d H:i:s", time() - 60*60*24)."<br>";

// menampilkan nama bulan dan tangga tahun (timestamp)
echo date("F j Y H:i:s")."<br>";  

// menampilkan current timestamp
echo time();

// parse date 
$dateString = date_parse('2024-11-27 09:00:00');

echo "<pre>";
var_dump($dateString);
echo "</pre>";

// parse date from formats
$tanggalString = "November 27 2000 10:45:00";

$parseDate = date_parse_from_format("F j Y H:i:s", $tanggalString);
echo "<pre>";
var_dump($parseDate);
echo "</pre>";






?>