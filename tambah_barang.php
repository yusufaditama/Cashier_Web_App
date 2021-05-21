<?php
session_start();
if(!isset($_SESSION["Login"])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
                            <li>Daftar Barang</li>
                        </ol>
                    </div>
                </div>

 <form action="tambah_barang_simpan.php" method="post">

        <div class="form-group">
            <label>Jenis Barang:</label>
            <input type="text" name="jenisbarang" class="form-control" placeholder="jenisbarang" />
        </div>
    
    <div class="form-group">
            <label>Nama Barang:</label>
            <input type="text" name="namabarang" class="form-control" placeholder="namabarang" />
        </div>

        <div class="form-group">
            <label>Harga Satuan:</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" />
        </div>
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
    <!-- /#wrapper -->

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