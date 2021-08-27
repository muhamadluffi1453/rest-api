<?php 
// $mahasiswa = [
// 	[
// 	"nama" => "Muhamad Luffi Dwi Daliana",
// 	"nim" => "160511052",
// 	"jurusan" => "Teknik Informatika"
// 	],

// 	[
// 	"nama" => "Muhamad Irfan Manap",
// 	"nim" => "160511051",
// 	"jurusan" => "Teknik Informatika"
// 	]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo "$data";




 ?>