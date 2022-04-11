<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 240px;
  font-size: 28px;
  padding: 0px 10px;
  background-color: blue;
}
	</style>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<title>ILHAM BAHRI</title>
  </head>
<body>
<div class="sidenav">
  <a href="index.php">Nomer 1</a>
  <br>
  <a href="no2.php">Nomer 2</a>
  <br>
  <a href="no3.php">Nomer 3</a>
  <br>
</div>
<header style="background-color: #198754;">
  <center>
  <h1><img src="l.JPG"> Nomer 2</h1></center>
  </header>
<div class="main">

<?php

$MHS = [
  ['nama' => 'Andi', 'Kelas' => 'D4-A', 'nrp' => 1, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Ani', 'Kelas' => 'D4-B', 'nrp' => 2, 'Dosen_wali_mahasiswa' => 'Puspita', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Candra', 'Kelas' => 'D4-A',  'nrp' => 3, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Denis', 'Kelas' => 'D4-B',  'nrp' => 4, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'C', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Fabrian',  'Kelas' => 'D4-A', 'nrp' => 5, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Gunawan', 'Kelas' => 'D4-B',  'nrp' => 6, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Hendra', 'Kelas' => 'D4-A', 'nrp' => 7, 'Dosen_wali_mahasiswa' => 'Indah', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Ian', 'Kelas' => 'D4-B', 'nrp' => 8, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Joko', 'Kelas' => 'D4-A', 'nrp' => 9, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Kirana', 'Kelas' => 'D4-B', 'nrp' => 10,'Dosen_wali_mahasiswa' => 'Puspita', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Luqman', 'Kelas' => 'D4-A', 'nrp' => 11, 'Dosen_wali_mahasiswa' => 'Rahwana', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Mahendra', 'Kelas' => 'D4-B', 'nrp' => 12, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'C', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Nawa',  'Kelas' => 'D4-A', 'nrp' => 13, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Nayla', 'Kelas' => 'D4-B', 'nrp' => 14, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Omar', 'Kelas' => 'D4-A', 'nrp' => 15, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Pirky', 'Kelas' => 'D4-B', 'nrp' => 16, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Rara', 'Kelas' => 'D4-A', 'nrp' => 17, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Reza', 'Kelas' => 'D4-B', 'nrp' => 18, 'Dosen_wali_mahasiswa' => 'Puspita', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Rossi', 'Kelas' => 'D4-A', 'nrp' => 19, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Sasa', 'Kelas' => 'D4-B', 'nrp' => 20, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'C', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Saskia',  'Kelas' => 'D4-A', 'nrp' => 21, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Serli', 'Kelas' => 'D4-B', 'nrp' => 22, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Siska', 'Kelas' => 'D4-A', 'nrp' => 23, 'Dosen_wali_mahasiswa' => 'Indah', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Sora', 'Kelas' => 'D4-B', 'nrp' => 24, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Taro', 'Kelas' => 'D4-A', 'nrp' => 25,  'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Umar', 'Kelas' => 'D4-B', 'nrp' => 26, 'Dosen_wali_mahasiswa' => 'Puspita', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Wahyu', 'Kelas' => 'D4-A', 'nrp' => 27, 'Dosen_wali_mahasiswa' => 'Rahwana', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Yahya', 'Kelas' => 'D4-B', 'nrp' => 28, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'C', 'MHS_aktif_di_HIMIT' => true],
  ['nama' => 'Yolanda',  'Kelas' => 'D4-A', 'nrp' => 29,'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'A', 'MHS_aktif_di_HIMIT' => false],
  ['nama' => 'Zahra', 'Kelas' => 'D4-B', 'nrp' => 30, 'Dosen_wali_mahasiswa' => 'Desy Intan Permatasari', 'Nilai_mata_kuliah_konsep_pemrograman' => 'B', 'MHS_aktif_di_HIMIT' => true]
];
$x = 1;
asort($MHS);
function data($nrp, $MHS){
	foreach($MHS as $mhs){
		if($mhs['nrp'] == $nrp){
	$nama = $mhs['nama'];
	return $nama;
		}
	}
}

foreach($MHS as $mhs){
 if($mhs['Kelas'] == 'D4-A' || $mhs['Kelas'] == 'D4-B'){
	 if ($mhs['Dosen_wali_mahasiswa'] == 'Desy Intan Permatasari' && $mhs['Nilai_mata_kuliah_konsep_pemrograman'] == 'A' && $mhs['MHS_aktif_di_HIMIT'] == true ){
		echo data($mhs['nrp'], $MHS). ' adalah mahasiswa kelas '. $mhs['Kelas'].' yang aktif di HIMIT'. '<br>';} 
	}
}
 
?>
</div>
</body>
</html>