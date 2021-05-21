<?php
session_start();
if(!isset($_SESSION["Login"])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles template ini-->

        <!-- Custom Fonts Awesome-->
        <link href="<?php echo $hostname;?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <title>Print</title>
  <style type="text/css">
  .left{
    float:left;
    width:50%;
  }

  .right{
    float:right;
    width:50%;
  }
  </style>
<link rel="stylesheet" href="bootstrap/css/printer.css">
</head>
<body onload="window.print()">
<?php 
error_reporting(0);
include "koneksi.php"; 

    $sql="select * from checkout order by idcheckout desc";
    $result=mysqli_query($koneksi,$sql);
    $no=0;
    while ($datas = mysqli_fetch_array($result)){
      ?>

      <h2><center>KWITANSI PEMBAYARAN</center></h2>
                  <hr>
                  <table class='table table-condensed table-hover'>
                      <tbody>
                        <tr><td widtd='120px' scope='row'>Nama Kasir</td>     <td> : <?php echo  $_SESSION['nama'];  ?></td></tr>
                        <tr><td scope='row'>Tanggal</td>                   <td> : <?php echo $datas['tanggal'];?> </td></tr>
                      </tbody>
                      <?php
                      }
                      ?>
                  </table>
                  

<form action="delete_kwitansi.php" method="post">
  <table class="table table-hover" width='100%'>
    <thead>
      <tr>
        <th style='width:20px'>No</th>
        <th >Tanggal</th>
        <th>Total Harga</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <?php 
    include "koneksi.php";
    $sql="select * from checkout order by idcheckout desc";
    $result=mysqli_query($koneksi,$sql);
    $no=0;
    while ($datas = mysqli_fetch_array($result)) {
    $no++;

    ?>
    <tbody>
      
           <tr>
           <center> 
        <td><?php echo $no;?></td> 
        <td><?php echo $datas["tanggal"]; ?></td> 
        <td><?php echo $datas["totalharga"];   ?></td> 
        <td><?php echo $datas["totalbayar"];   ?></td>
           </center>
           </tr>
       </tbody>  
    <?php 
    }
    ?>          
</table>

  <?php
    include "koneksi.php";
    $sql="select * from checkout order by idcheckout desc";
    $result=mysqli_query($koneksi,$sql);
    $no=0;
    while ($datas = mysqli_fetch_array($result)){

  $kembalian;
  $byr = $datas['totalbayar'];
  $hrg = $datas['totalharga'];
  $totalkembalian = $byr - $hrg;
  ?>

<h5>Total Kembalian:</h5>
<h3><input type="text" value="Rp. <?php echo number_format($totalkembalian) ?>" disabled \></h3>
<button type="submit" name="submit" class="btn btn-primary">Terima Kasih</button>
<?php 
    }
    ?> 
  </form>


