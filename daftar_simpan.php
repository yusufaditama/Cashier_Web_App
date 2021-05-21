<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="alert/css/sweetalert.css">

</head>
<body >

<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$pass = $_POST['password'];
$p    = md5($pass); //untuk password digunakan enskripsi md5
$nama=$_POST["nama"];
$email = $_POST["email"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into admin (username,password, nama, email) values
		('$username','$p','$nama', '$email')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
 echo "
 <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Berhasil Daftar',
    text:  'For $email',
    type: 'success',
    timer: 3000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('index.php');
  } ,3000); 
 </script>";   
  }
else {
	echo "
 <script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Gagal',
    text:  'For $email',
    type: 'success',
    timer: 3000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('daftar.php');
  } ,3000); 
 </script>";  
}  

?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>

</body>
</html>