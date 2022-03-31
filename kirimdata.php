<?php 


$koneksi = mysqli_connect("localhost","root","","dbpengunjung");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

	//baca data yang dikirm oleh nodemcu
$suhu = $_GET['suhu'];
$pir = $_GET['pir'];
$pengunjung = $_GET['pengunjung'];


mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

//simpan data sensor ke tabel tb_sensor
$simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor(suhu,pir,pengunjung)values('$suhu', '$pir', '$pengunjung')");

//uji simpan untuk memberikan respon
if($simpan)
	echo"Berhasil dikirim" ;
else
	echo"Gagal terkirim";

 ?>