<html>
<head>
<title>Sistem Informasi Kelompok Praktikum</title>
</head> 

<body align="center" background="bg.gif"> 
<img src="gorila.gif"><br>

<?php
$txt = "Profil Saya";
$a = "Prayogo Nugroho Molet";
$b = "Jln Kemakmuran Gg pln";
$c = "Universitas Mulawarman Fakultas Ilmu Komputer dan Teknologi Informasi";
echo $txt . "<br>" . "<br>";
echo "Nama Saya: " . $a . "<br>" . "<br>";
echo "Alamat: " . $b . "<br>" . "<br>";
echo "Universitas: " . $c . "<br>" . "<br>";
$x = 2016;
$y = 1997;
$u = $x - $y;
echo "Umur Saya: " . $u . "<br>" . "<br>";
echo "Panjang String Nama Saya ada = " ;
echo strlen("Prayogo NUgroho Molet");
echo "<br>";

$cars = array( 
	array("Toshiba","acer","Lenovo","hp","asus"), 
	array("flasdisk","Hardisk","Diskcard"), 
	array("Print","RAM","Monitor"), 
	array("Lcd","Menboard","PC") 
	); 
for ($row = 0; $row < 4; $row++) { 
	echo "<p><b>Toko Komputer $row</b></p>"; 
	echo "<ul>"; 
	for ($col = 0; $col < 3; $col++) { 
		echo "<li>".$cars[$row][$col]."</li>"; 
		} 
		echo "</ul>"; 
}
?>


</body>
</html>