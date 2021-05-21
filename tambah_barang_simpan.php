<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$jenisbarang=$_POST["jenisbarang"];
$namabarang = $_POST['namabarang'];
$harga=$_POST["harga"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into barang (jenisbarang,namabarang, harga) values
		('$jenisbarang','$namabarang','$harga')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('Location:kelola_barang.php');
  }
else {
	echo "Gagal simpan data";
	exit;
}  

?>