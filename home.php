<html>
<head>
	<title>Tugas Akhir Monitoring Pengunjung</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function() {
			setInterval( function() {
				$("#inputsuhu").load('inputsuhu.php');
				$("#ceksuhu").load('ceksuhu.php');
				$("#cekpir").load('cekpir.php');
				$("#cekpengunjung").load('cekpengunjung.php');
				
			},500);
		});
	</script>
</head>
<body>
	
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

	<!-- bagian header template -->
	<header>
		<h1 class="judul">Monitoring Pengunjung Cafe Sobat</h1>
		<p class="deskripsi">Pada PPKM jumlah pengunjung cafe maksimal hanya 30%</p>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a href="About.php">About</a>
				</li>
				<li>
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>WELLCOME</h2>
				<p>Selamat Datang di Situs Monitoring Jumlah Pengunjung Cafe Sobat.</p>
			</div>
			<div class="widget">
				<h2>CATATAN</h2>
				<p>- Kapasitas Cafe MAKS 100 Orang
					<br> <br>
					- Jumlah Pengunjung MAKS 30 %
					<br> <br>
					- Jumlah Pengunjung < 30 Orang =<b> Pengunjung Normal</b> 
					<br> <br>
					- Jumlah Pengunjung > 30 Orang =<b> Kapasitas Berlebih</b>
				</a>.</p>
			</div>
		</aside>
		<!-- akhir bagian sidebar website -->
 
		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					By <b>Fachru Ramadhan</b>
				</div>
				
				<h1> MONITORING PENGUNJUNG </h1>
				<hr>				
				<div style="display: flex;">
	<div class="container" style="text-align: center; padding-top: 1%; width: 500px;">
		<h2>Nilai Suhu</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h1> <span id="inputsuhu"></span></h1>
			</div>
		</div>
	 </div>


	<div class="container" style="text-align: center; padding-top: 1%; width: 500px;">
		<h2>Pengunjung Masuk</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h1> <span id="ceksuhu"></span></h1>
			</div>
		</div>
	 </div>


	<div class="container" style="text-align: center; padding-top: 1%; width: 500px;">
		<h2>Pengunjung Keluar</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h1> <span id="cekpir"></span></h1>
			</div>
		</div>
	 </div>


<div class="container" style="text-align: center; padding-top: 1%; width: 500px;">
		<h2>Jumlah Pengunjung</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h1> <span id="cekpengunjung"></span></h1>
			</div>
		</div>
	 </div>	
 
</body>
</html>