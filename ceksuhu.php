<?php 


$koneksi = mysqli_connect("localhost","root","","dbpengunjung");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}



	
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor order by id desc");
	$data = mysqli_fetch_array($sql);
	$suhu = $data["suhu"];

	if( $suhu == "") $suhu = 0;

	echo $suhu;



 ?>

