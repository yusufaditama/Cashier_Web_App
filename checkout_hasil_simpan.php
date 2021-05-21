<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$tanggal=$_POST["tanggal"];
$totalharga = $_POST['totalharga'];
$totalbayar=$_POST["totalbayar"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into transaksi (tanggal,totalharga, totalbayar) values
		('$tanggal','$totalharga','$totalbayar')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('Location:checkout_hasil.php');
  }
else {
	echo "Gagal simpan data";
	exit;
}  

?>