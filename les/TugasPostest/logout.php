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

				unset($_SESSION['login']);
				unset($_SESSION['username']);

				echo "Sukses logout. Silahkan <a href='login_admin.php'>login</a> untuk masuk ke halaman admin";
				?>
		</body>
	</html>