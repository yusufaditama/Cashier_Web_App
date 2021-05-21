<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$tipebarang=$_POST["tipebarang"];
$namabarang = $_POST['namabarang'];
$hargabarang=$_POST["hargabarang"];
$jumlah=$_POST["jumlah"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into keranjang (tipebarang,namabarang, hargabarang, jumlah) values
		('$tipebarang','$namabarang','$hargabarang', '$jumlah')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('Location:transaksi.php');
  }
else {
	echo "Gagal simpan data";
	exit;
}  

?>