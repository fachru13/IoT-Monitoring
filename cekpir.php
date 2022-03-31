<?php 


$koneksi = mysqli_connect("localhost","root","","dbpengunjung");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}



	
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor order by id desc");
	$data = mysqli_fetch_array($sql);
	$pir = $data["pir"];

	if( $pir == "") $pir = 0;

	echo $pir;



 ?>

