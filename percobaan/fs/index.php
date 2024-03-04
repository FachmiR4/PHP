<?php 
// magic constanta
echo __DIR__."<br>";
echo __FILE__."<br>";
echo __LINE__."<br>";

// membuat directory / file
// mkdir('test');

// mengganti nama directory
// rename('test', 'test2');

// menghapus directory
// rmdir('test2');

// membaca file dan folder didalam directory
$file = scandir('../');
echo "<pre>";
var_dump($file);
echo "</pre>";

// file_get_contents, file_put_contents
echo file_get_contents("lorem.txt");
file_put_contents('sempel.txt', 'aku adalah sosok lelaki dermawan dan baik hati kepada siapa pun.');

// file_get_contets from URL
$userJson = file_get_contents("https://jsonplaceholder.typicode.com/users");
echo $userJson;
// mengubah data json menjadi array
$dataJson = json_decode($userJson,true);
echo "<pre>";
var_dump($dataJson);
echo "</pre>";

file_exists('sempel.txt');//true
is_dir('test');//false

?>