<html>
	<head>
		<title>Sistem Informasi Kelompok Praktikum</title>
	</head>
	<style type="text/css">
		body {
				background: #8C7E7E
			 }
		body.tulis {
			 position: absolute;
			 left: 400;
			 top: 200;
			 font-size: 20px;
			 }
	</style>
		<body class="tulis">
			<?php
			session_start();

			if($_POST['username'] == 'Prayogo Nugroho' && $_POST['password'] == '073'){
			// Login process is by assining session variable
			$_SESSION['login'] = true;
			$_SESSION['username'] = $_POST['username'];
			echo "Login berhasil klik
			<a href='1515015073.php'>Beranda</a> untuk melihat data sensitif
			atau <a href='logout.php'>logout</a> untuk keluar";
			}else{
			echo "Kombinasi username dan password salah. Silahkan login lagi!";
			}
			?>
		</body>
</html>