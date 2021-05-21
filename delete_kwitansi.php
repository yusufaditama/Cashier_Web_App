<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";

//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($koneksi, "DELETE FROM checkout ORDER BY idcheckout");
if($hapus){ //jika berhasil
    echo "<script>alert('Transaksi Selesai');document.location='homepage.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Gagal');document.location='cetak_kwitansi.php'</script>";
}
?>