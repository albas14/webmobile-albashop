<!DOCTYPE html>
<?php 
include_once"koneksi.php";
connectdb();
?>
<html lang="en">
<head>
  <title>albastore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 50%; height: 50%; margin: auto;}</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #000000;
      padding: 25px;
    }
	
	.navbar-inverse {
    background-color: #000000; /* Orange */
	}
  </style>
</head>
<body>


	

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="?menu=home">albas Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?menu=home">Home</a></li>
		<ul class="nav navbar-nav">
		<li><a href="?menu=kategori&produk=kaos">kaos</a></li>
		<li><a href="?menu=kategori&produk=jersey">jersey</a></li>
		<li><a href="?menu=kategori&produk=jaket">jaket</a></li>
		<li><a href="?menu=kategori&produk=kemeja">kemeja</a></li>
      
		
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="?menu=kontak">Contact</a></li>
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="?menu=login">
	 <?php
	 if(isset ($_COOKIE ['email']))
	 {
		 ?>
		 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_COOKIE['namauser'];?></a>
      <ul class="dropdown-menu">
          <li><a href="gologout.php">logout</a></li>
        </ul>
		 <?php
	 }
	 else 
	 {
		 ?>
		 Your Account
		 <?php } ?>
		</a></li>
        <li><a href="?menu=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
	  
	   <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-info" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	  <img src="OKE/head1.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="item">
      <img src="OKE/head2.png" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="item">
      <img src="OKE/head3.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="item">
      <img src="OKE/4.png" class="img-responsive" style="width:100%" alt="Image">
      </div>
      <div class="item">
      <img src="OKE/5.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
  
   <style type="text/css">
  .navbar-inverse{
  background-color:#000000; 
  }
  </style>
  
</head>
<body>



<?php
	error_reporting(0);
	if($_GET['menu']=='')
		{
			include('home.php');
		}else
		{
			include($_GET['menu'].'.php');
		}
?>
<?php
	error_reporting(0);
	if($_GET['produk']=='')
		{
			include('produk.php');
		}else
		{
			include($_GET['produk'].'.php');
		}
?>

  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"online shop yang menjual produk pakaian"<br><span>Seperti baju, kaos, kemeja,jersey dll</span></h4>
      </div>
      <div class="item">
        <h4>"semua ada disini.. woww!!!"<br><span>harga bisa dibandingkan dengan onlineshop sebelah</span></h4>
      </div>
      <div class="item">
        <h4>"albashop store tidak hanya diweb ini, bisa lihat di instagram dan facebook lhooo"<br><span>happy shopping ladys</span></h4>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<footer class="container-fluid text-center">
  <p>albashop Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
