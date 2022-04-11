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
  ['nama' => 'Andi', 'NRP' => '1', 'IPK' => 3.8, 'rambut' => 'hitam dan lurus', 'beratbadan' => 45, 'tinggibadan' => 170, 'cuti' => false],
  ['nama' => 'Ani', 'NRP' => '2', 'IPK' => 4, 'rambut' => 'hitam dan kriting', 'beratbadan' => 65, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Candra', 'NRP' => '3', 'IPK' => 3.2, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Denis', 'NRP' => '4', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 155, 'cuti' => true],
  ['nama' => 'Fabrian',  'NRP' => '5','IPK' => 3.1, 'rambut' => 'hitam dan lurus', 'beratbadan' => 49, 'tinggibadan' => 153, 'cuti' => false],
  ['nama' => 'Gunawan', 'NRP' => '6', 'IPK' => 3.9, 'rambut' => 'hitam dan lurus', 'beratbadan' => 63, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Hendra', 'NRP' => '7', 'IPK' => 3.5, 'rambut' => 'merah dan kriting', 'beratbadan' => 59, 'tinggibadan' => 162, 'cuti' => false],
  ['nama' => 'Ian', 'NRP' => '8', 'IPK' => 3.2, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Joko', 'NRP' => '9', 'IPK' => 3.8, 'rambut' => 'hitam dan lurus', 'beratbadan' => 45, 'tinggibadan' => 170, 'cuti' => false],
  ['nama' => 'Kirana', 'NRP' => '10', 'IPK' => 4, 'rambut' => 'hitam dan kriting', 'beratbadan' => 65, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Luqman', 'NRP' => '11', 'IPK' => 3.2, 'rambut' => 'kuning dan lurus', 'beratbadan' => 75, 'tinggibadan' => 180, 'cuti' => false],
  ['nama' => 'Mahendra', 'NRP' => '12', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 155, 'cuti' => true],
  ['nama' => 'Nawa',  'NRP' => '13','IPK' => 3.1, 'rambut' => 'hitam dan lurus', 'beratbadan' => 49, 'tinggibadan' => 153, 'cuti' => false],
  ['nama' => 'Nayla', 'NRP' => '14', 'IPK' => 3.9, 'rambut' => 'hitam dan lurus', 'beratbadan' => 63, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Omar', 'NRP' => '15', 'IPK' => 3.1, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Pirky', 'NRP' => '16', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 66, 'tinggibadan' => 150, 'cuti' => false],
  ['nama' => 'Rara', 'NRP' => '17', 'IPK' => 3.8, 'rambut' => 'hitam dan lurus', 'beratbadan' => 45, 'tinggibadan' => 170, 'cuti' => false],
  ['nama' => 'Reza', 'NRP' => '18', 'IPK' => 4, 'rambut' => 'hitam dan kriting', 'beratbadan' => 65, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Rossi', 'NRP' => '19', 'IPK' => 3.2, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Sasa', 'NRP' => '20', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 155, 'cuti' => true],
  ['nama' => 'Saskia',  'NRP' => '21','IPK' => 3.1, 'rambut' => 'hitam dan lurus', 'beratbadan' => 49, 'tinggibadan' => 153, 'cuti' => false],
  ['nama' => 'Serli', 'NRP' => '22', 'IPK' => 3.9, 'rambut' => 'hitam dan lurus', 'beratbadan' => 63, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Siska', 'NRP' => '23', 'IPK' => 3.5, 'rambut' => 'merah dan kriting', 'beratbadan' => 59, 'tinggibadan' => 162, 'cuti' => false],
  ['nama' => 'Sora', 'NRP' => '24', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 66, 'tinggibadan' => 150, 'cuti' => false],
  ['nama' => 'Taro', 'NRP' => '25', 'IPK' => 3.8, 'rambut' => 'hitam dan lurus', 'beratbadan' => 45, 'tinggibadan' => 170, 'cuti' => false],
  ['nama' => 'Umar', 'NRP' => '26', 'IPK' => 4, 'rambut' => 'hitam dan kriting', 'beratbadan' => 65, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Wahyu', 'NRP' => '27', 'IPK' => 3.2, 'rambut' => 'kuning dan lurus', 'beratbadan' => 75, 'tinggibadan' => 180, 'cuti' => false],
  ['nama' => 'Yahya', 'NRP' => '28', 'IPK' => 3.7, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 155, 'cuti' => true],
  ['nama' => 'Yolanda',  'NRP' => '29','IPK' => 3.1, 'rambut' => 'hitam dan lurus', 'beratbadan' => 50, 'tinggibadan' => 160, 'cuti' => false],
  ['nama' => 'Zahra', 'NRP' => '30', 'IPK' => 3.9, 'rambut' => 'hitam dan lurus', 'beratbadan' => 63, 'tinggibadan' => 160, 'cuti' => false]
];
$x = 1;
asort($MHS);
function data($nama, $nrp){
	$data = "NAMA = " . $nama . ",NRP = " . $nrp . "<br>";
	return $data;
}

foreach($MHS as $mhs){
 if($mhs['NRP'] < '6'){
	 if ($mhs['IPK'] < 3.25 && $mhs['IPK'] > 3 && $mhs['rambut'] == 'hitam dan lurus' && $mhs['beratbadan'] == 50 && $mhs['tinggibadan'] == 160 && $mhs['cuti'] == false ){
		echo data($mhs['nama'], $mhs['NRP']);} 
	else {}
 }
 switch ($mhs['NRP']) {
  case '6':
    switch ($mhs['IPK']) {
		case 3.05:
		 switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.1:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.15:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.2:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
	break;}
 break;
  case '7':
    switch ($mhs['IPK']) {
		case 3.05:
		 switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.1:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.15:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.2:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
	break;}
    break;
  case '8':
    switch ($mhs['IPK']) {
		case 3.05:
		 switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.1:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.15:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.2:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
	break;}
    break;
  case '9':
    switch ($mhs['IPK']) {
		case 3.05:
		 switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.1:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.15:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.2:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
	break;}
    break;
  case '10':
    switch ($mhs['IPK']) {
		case 3.05:
		 switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.1:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.15:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
		break;
		case 3.2:
		switch ($mhs['rambut']) {
			 case 'hitam dan lurus':
			  switch ($mhs['beratbadan']) {
				case 50:
				 switch ($mhs['tinggibadan']) {
				   case 160:
				    switch ($mhs['cuti']) {
					 case false:
					  echo data($mhs['nama'], $mhs['NRP']); 
					break;}
				 break;}
			  break;}
		 break;}
	break;}
    break;
 }
 if ($mhs['NRP'] < '16' && $mhs['NRP'] > '10' && $mhs['IPK'] < 3.25 && $mhs['IPK'] > 3 && $mhs['rambut'] == 'hitam dan lurus' && $mhs['beratbadan'] == 50 && $mhs['tinggibadan'] == 160 && $mhs['cuti'] == false){
 do {
  echo data($mhs['nama'], $mhs['NRP']);
  $x++;
} while ($x <= 1 && $mhs['NRP'] < '16' && $mhs['NRP'] > '10' && $mhs['IPK'] < 3.25 && $mhs['IPK'] > 3 && $mhs['rambut'] == 'hitam dan lurus' && $mhs['beratbadan'] == 50 && $mhs['tinggibadan'] == 160 && $mhs['cuti'] == false);
 }
  if ($mhs['NRP'] < '21' && $mhs['NRP'] > '15' && $mhs['IPK'] < 3.25 && $mhs['IPK'] > 3 && $mhs['rambut'] == 'hitam dan lurus' && $mhs['beratbadan'] == 50 && $mhs['tinggibadan'] == 160 && $mhs['cuti'] == false){
	for ($x = 0; $x <= 0; $x++) {
		echo data($mhs['nama'], $mhs['NRP']);
	}
  }
  if ($mhs['NRP'] < '31' && $mhs['NRP'] > '20' && $mhs['IPK'] < 3.25 && $mhs['IPK'] > 3 && $mhs['rambut'] == 'hitam dan lurus' && $mhs['beratbadan'] == 50 && $mhs['tinggibadan'] == 160 && $mhs['cuti'] == false){
  $y = 1;
  while ($y == 1){
	echo data($mhs['nama'], $mhs['NRP']);
	  $y++;
  }
  }
}
?>
</div>
</body>
</html>