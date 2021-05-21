<?php
session_start();
if(!isset($_SESSION["Login"])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .col-jenisbarang {
                margin-left: 25px;
                width: 500px;
                height: 30px;
            }
            .col-namabarang {
                width: 1225px;
                height: 30px;
            }
            .col-harga{
                width: 200px
                height: 50px;
            }
        </style>
        <title>Cashier APP</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles template ini-->
         <link rel="stylesheet" href="assets/style.css">

        <!-- Custom Fonts Awesome-->
        <link href="<?php echo $hostname;?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrapper">

<!-- Bagian Navbar / menu bagian atas dan samping-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="homepage.php"><span class="glyphicon glyphicon-bell"></span>  Cashier</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li class="message-preview"><a href="#"><i class="fa fa-info-circle"></i> <span class="label label-default">12</span></a></li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php
                echo  $_SESSION['nama'];  ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </li>
        </ul>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="kelola_barang.php">Kelola Barang</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Bagian Navbar / menu bagian atas dan samping-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>
                            <i class="fa fa-home fa-fw"></i> Dashboard Kasir
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li>Transaksi</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<h4 class="alert-heading"><b>List Menu</b></h4>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Jenis Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
      </tr>
    </thead>
    <?php 
    include "koneksi.php";
    $sql="select * from barang order by idbarang desc";
    
    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;

    ?>
    <tbody>
           <tr> 
        <td><?php echo $no;?></td> 
        <td><?php echo $data["jenisbarang"]; ?></td> 
        <td><?php echo $data["namabarang"];   ?></td>
        <td>Rp. <?php echo $data["harga"];   ?></td>
           </tr>
       </tbody>  
    <?php 
    }
    ?>          
</table>
<br>
                

        
        <form action="transaksi_simpan.php" method="post">
            <h4 class="alert-heading"><b>Masukkan Pesanan</b></h4>
        <div class="form-group">
        <?php
        include "koneksi.php";
        $sql="select * from tipe order by tipebarang asc";
        $hasil=mysqli_query($koneksi,$sql);
        ?>
            <label>Jenis Barang:</label>
            <br>
            <select class= "col-namabarang" name="tipebarang">
                  <option disabled selected> Pilih </option>
                  <?php if (mysqli_num_rows($hasil) > 0) { ?>
                    <?php while ($row = mysqli_fetch_array($hasil)){ 
                    echo "<option value='". $row['tipebarang'] ."'>" .$row['tipebarang'] ."</option>";  
                  
               } ?>
              <?php } ?>
              </select>
        </div>


        <div class="form-group">
        <?php
        include "koneksi.php";
        $sql="select * from barang order by namabarang asc";
        $hasil=mysqli_query($koneksi,$sql);
        ?>
            <label>Nama Barang:</label>
            <br>
            <select class= "col-namabarang" name="namabarang">
                  <option disabled selected> Pilih </option>
                  <?php if (mysqli_num_rows($hasil) > 0) { ?>
                    <?php while ($row = mysqli_fetch_array($hasil)){ 
                    echo "<option value='". $row['namabarang'] ."'>" .$row['namabarang'] ."</option>";  
                  
               } ?>
              <?php } ?>
              </select>
        </div>


        <div class="form-group">
            <label>Harga:</label>
             <input type="text" name="hargabarang" class="form-control" value=""/>
        </div>
        <div class="form-group">
            <label>Jumlah:</label>
            <input type="text" name="jumlah" class="form-control" value=""/>
        </div>
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      
    </form>
    <br><br>


    <form action="checkout.php" method="post">
    <h4 class="alert-heading"><b>Keranjang</b></h4>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Jenis Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <?php 
    include "koneksi.php";
    $sql="select * from keranjang order by idcart desc";
    $result=mysqli_query($koneksi,$sql);
    $no=0;
    while ($datas = mysqli_fetch_array($result)) {
    $no++;

    ?>
    <tbody>
           <tr> 
        <td><?php echo $no;?></td> 
        <td><?php echo $datas["tipebarang"]; ?></td> 
        <td><?php echo $datas["namabarang"];   ?></td> 
        <td><?php echo $datas["hargabarang"];   ?></td>
        <td><?php echo $datas["jumlah"];   ?></td> 
        <?php
            
            $subtotal;
            $hrg = $datas['hargabarang'];
            $qtyy = $datas['jumlah'];
            $totalharga = $hrg * $qtyy;
            $subtotal += $totalharga
             ?>
             <!--</i> <span> </span></li> -->
        <td>Rp<?php echo number_format($totalharga) ?></td>
           </tr>
       </tbody>  
    <?php 
    }
    ?>          
</table>

<h5>Total Harga yang harus dibayar saat ini</h5>
<h3><input type="text" value="<?php echo number_format($subtotal) ?>" disabled \></h3>
<button type="submit" name="submit" class="btn btn-primary">Checkout</button>
 </form>


<!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="alert/js/sweetalert.min.js"></script>
    <script src="alert/js/qunit-1.18.0.js"></script>


    </body>
</html>