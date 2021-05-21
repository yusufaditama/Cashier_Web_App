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
img {
border-radius: 50%;
text-align: center;
}
img.tengah {
display: block;
margin-left: auto;
margin-right: auto;
}
button {
display: block;
margin-left: auto;
margin-right: auto;
border-radius:100px
}
i {
text-align: center;
display: block;
margin-left: 10px;
margin-right: 10px;
margin-top: 15px;
}
        </style>
    	<title>Cashier APP</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles template ini-->
         <link rel="stylesheet" href="assets/style.css">

        <!-- Custom Fonts Awesome-->
        <link href="<?php echo $hostname;?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css" integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/regular.css" integrity="sha384-hCIN6p9+1T+YkCd3wWjB5yufpReULIPQ21XA/ncf3oZ631q2HEhdC7JgKqbk//4+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css" integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css" integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">

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
            <li><a href="#about">About</a></li>
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
                            <li>About Me</li>
                        </ol>
                    </div>
                </div>
    
<img class="tengah" src="assets/img/foto.jpg" alt="Avatar" style="width:195px height="195px" width="200px">
<center>
<h1> <span align="center"> Hello!</h1> </span>
<h2> <span align="center"> I Am Ahmad Yusuf Aditama </h2> </span>
<p> <span align="center" class="button"> Hardware & Software Engineer</p> </span>
</center>
<center>
<a href="https://www.linkedin.com/in/ahmad-aditama-8b7521149"><i class="fab fa-linkedin"></i></a>
<a href="https://github.com/yusufaditama"><i class="fab fa-github"></i></a>
<a href="https://www.facebook.com/ahc.yusuf"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/adtm._"><i class="fab fa-instagram"></i></a>
<a href="https://wa.me/6282289836536"><i class="fab fa-whatsapp"></i></a>
</center>
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