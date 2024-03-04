<?php
// membuat data array menggunakan for loop lalu ditambahkan dengan array_push
$data = array();
$no = 0;
for($i = 0; $i < 20; $i++){
    $no += 1;
    $mobil = array();
    $mobil["id"] = $no; 
    $mobil["nama"] = "mobil".$no;
    $mobil["harga"] = $no."100000";
    array_push($data, $mobil);
}
// echo '<pre>';
// var_dump($data);
// echo '</pre>';

//membuat data array dengan variable 
$fruit = ['mangga', 'nangka', 'semangka'];

echo '<pre>';
var_dump($fruit);
echo '</pre>';

// mendapatkan element dengan index
echo $fruit[1]."<br>";

// mengatur element dengan index
$fruit[0] = 'jeruk';
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// mengecek jika array memiliki element pada index
isset($fruit[3]);//false

// menambahkan element baru
$fruit[] = 'anggur';
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// menampilkan panjang dari sebuah array
echo count($fruit).'<br>';

// menambahkan element pada akhir array
array_push($fruit, 'buah naga');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

//menghapuskan element dari akhir array
echo array_pop($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// menambahkan element pada awal array
array_unshift($fruit, 'kelengkeng');
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// menghapus element pada awal array
echo array_shift($fruit);
echo '<pre>';
var_dump($fruit);
echo '</pre>';

// membagi string berdasarkan penanda pada array
$string = "salak, strobery, manggis";
echo '<pre>';
var_dump(explode(',',$string));
echo '</pre>';

// mengkombinasikan element array kedalam string
echo implode("&", $fruit);

// mengecek element jika element didalam array
echo '<pre>';
var_dump(in_array('jeruk',$fruit));
echo '</pre>';

// mencari index element didalam array 
echo '<pre>';
var_dump(array_search('jeruk', $fruit));
echo '</pre>';

// merge dua array
$vegetable = ['kentang', 'tomat'];
echo '<pre>';
var_dump(array_merge($fruit, $vegetable));
var_dump([...$fruit, ...$vegetable]);
echo '</pre>';

// menyingkat array
echo "-----------"; 
echo '<pre>';
var_dump($fruit);
echo '</pre>';
echo '<pre>';
rsort($fruit);
echo '</pre>';

// ========================================================================================

// membuat sebuah associative pada array
$person = [
    'nama' => 'fahmi',
    'surname' => 'Ramadhan',
    'Age' => 30,
    'Hobbies' => ['berenang', 'main games', 'olahraga']
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// mendapatkan element berdasarkan key
echo $person['nama']."<br>";

// mengatur element bedasarkan key
$person['chennel'] = 'fahmiRamadhan';
echo '<pre>';
var_dump($person);
echo '</pre>';

// null coalescing assignment operator
// if(!isset($person['address'])){
//      $person['address'] = 'unknown';
// }
$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// menampilkan key dari sebuah array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// menampilkan values dari sebuah array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// mensorting associative array by values
asort($person);
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// dua dimensi array
$duaArray = [
    ['judul' => 'aku kecebur empang 1', 'completed' => 'true'],
    ['judul' => 'aku kecebur empang 2', 'completed' => 'false']
];
echo '<pre>';
var_dump($duaArray);
echo '</pre>';

?>