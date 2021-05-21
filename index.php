<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cashier</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="alert/css/sweetalert.css">

    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      footer{
      width: 100%;
      background-color: gray;
      padding: 10px;
      text-align: ;
      color: white;
      position: absolute;
      bottom: 0px;
      }
      body{
        background: url(assets/img/back.jpeg) no-repeat center fixed;
        background-size: cover;
      }
      .container{
        margin-top: 60px;
      }

      .container2{
        margin-top: 100px;
      }

      .coba{
        display: grid;
        list-style-type: none;
        grid-template-columns: repeat(3,auto);
        grid-template-rows: repeat(2, auto);
        margin: 0;
        padding: 0;
      }

      ul li{
        padding: 0.5em;
        color: white;
      }
      ul li span{
        display: block;
        font-size: 1.4em;
        margin-bottom: 1em;
        color: white;
      }


    </style>
  </head>

<!--navigation-->
<div class="navigation-agileits">
    <div class="container2">
      <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> 
              <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php" class="act">Home</a></li>  
                  

            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
              $user = $_POST['username'];
              $pass = $_POST['password'];
              $p    = md5($pass);

              if($user == '' && $pass ==''){
                 echo "
                 <script type='text/javascript'>
                  setTimeout(function () {  
                   swal({
                    title: 'Gagal',
                    text:  'Username & Password Kosong',
                    type: 'warning',
                    timer: 3000,
                    showConfirmButton: true
                   });  
                  },10); 
                  window.setTimeout(function(){ 
                   window.location.replace('index.php');
                  } ,3000); 
                 </script>"; 
              }
              else{
                include "koneksi.php";
                $sqlLogin = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$user' AND password='$p' ");
                $jml = mysqli_num_rows($sqlLogin);
                $d = mysqli_fetch_array($sqlLogin);

                if($jml > 0){
                  session_start();
                  $_SESSION['Login']  = TRUE;
                  $_SESSION['id']  = $d['idadmin'];
                  $_SESSION['username']  = $d['username'];
                  $_SESSION['nama']  = $d['nama'];

                  echo "
                 <script type='text/javascript'>
                  setTimeout(function () {  
                   swal({
                    title: 'Berhasil Login',
                    text:  'Selamat Datang di Aplikasi Kasir',
                    type: 'success',
                    timer: 3000,
                    showConfirmButton: true
                   });  
                  },10); 
                  window.setTimeout(function(){ 
                   window.location.replace('homepage.php');
                  } ,3000); 
                 </script>";   
                  
                }else{
                  echo "
                 <script type='text/javascript'>
                  setTimeout(function () {  
                   swal({
                    title: 'Gagal',
                    text:  'Username/Password Salah',
                    type: 'error',
                    timer: 3000,
                    showConfirmButton: true
                   });  
                  },10); 
                  window.setTimeout(function(){ 
                   window.location.replace('index.php');
                  } ,3000); 
                 </script>";  
                }
              }
            }
          ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-5">

              <form action="" method="post" role="form">
              <div class="form-group">
                <center><input type="text" class="form-control" style="width: 150px" name="username" placeholder="Username"></center>
              </div>
               <div class="form-group">
              <center><input type="password" class="form-control" style="width: 150px" name="password" placeholder="Password"></center>
            </div>


            <!-- kolom submit -->
            <div class="form-group">
              <center><button type="submit" name="submit" class="btn btn-primary">Login</button></center>
            </div>
          </form>
        </ul>
      </li>
                  <li><a href="daftar.php">Daftar</a></li>
                </ul>
              </div>
              </nav>
      </div>
    </div> 


  <body>
   <div class="container">
     <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-primary">
        
        <!-- header -->
        <div class="panel-heading">
          <center><h4 class="panel-tittle">Silahkan Login Dulu</h5></center>
        </div>


        <div class="panel-body">

          <center>
            <!-- masukin logo disini -->
            <img src="assets/img/arc.jpg" class="img-circle" alt="Logo" width="120px">
          </center>
             <!-- <form action="daftar.php" method="post">
            <center><button type="submit" name="submit" class="btn btn-primary">Daftar</button></center>
            </form> -->

        </div>
      </div>
     </div>        
   </div>


   <footer>
    <ul class="coba">
      <li>
        <span>Ahmad Yusuf Aditama </span>
        Saya merupakan seorang Hardware Engineer yang berlokasi di Palembang, Indonesia. Saya juga dapat bekerja sebagai seorang Web Developer dan Software Developer. Saat ini, saya baru lulus dari Universitas Sriwijaya pada Jurusan Sistem Komputer.
      </li>
      <li>
        <span>Hardware Engineer</span>
        Sebagai Hardware Engineer, saya dapat membuat sirkuit rangkaian elektronika, merancang struktur Robotika, membuat sistem berbasis Internet of Thing. Saya juga dapat membuat sistem menggunakan komputer mini seperti Raspberry Pi.
      </li>
      <li>
        <span>Software Engineer</span>
        Sebagai Software Developer, saya dapat membuat aplikasi berbasis Image Processing menggunakan bahasa pemrograman Python. Saya juga dapat mendesain dan mengembangkan sebuah Web Responsive menggunakan HTML 5, PHP, Bootsrap dan CSS. 
      </li>
    </ul>
   </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="alert/js/sweetalert.min.js"></script>
    <script src="alert/js/qunit-1.18.0.js"></script>

  </body>
</html>
