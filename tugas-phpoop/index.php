<?php

require_once 'Mahasiswa.php';
require_once 'Dosen.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->setNim('123200128')
->setNama('Rifqi Maulana')
->setProdi('Informatika')
->setAngkatan('2020');

$dosen = new Dosen();
$dosen->setNip('123456789')
->setNama('NamaDosen')
->setProdi('Informatika');

$kampus = new Kampus();

$mataKuliah = array(
  'Kalkulus Lanjut',
  'Struktur Data dan Algoritma',
  'Pemrograman Web',
  'Jaringan Komputer',
);

echo "Universitas: " . $mahasiswa->getNamaKampus() . PHP_EOL . "<br>";
echo "Mahasiswa: " . $mahasiswa->getNama() . " (" . $mahasiswa->getNim() . ")" . PHP_EOL . "<br>";
echo "Prodi: " . $mahasiswa->getProdi() . " (" . $mahasiswa->getAngkatan() . ")" . PHP_EOL . "<br>";
echo "Dosen Wali: " . $dosen->getNama() . " (" . $dosen->getNip() . ")" . PHP_EOL . "<br>";
echo "Mata Kuliah yang Diambil:" . PHP_EOL . "<br>";
foreach ($mataKuliah as $mataKuliah) {
  echo " - " . $mataKuliah . PHP_EOL . "<br>";
}

?>