﻿<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<?php
session_start();

?>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Back Home</a>
	  <a class="navbar-brand" href="#">Product List</a>    
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Link</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Dropdown
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
          </ul> -->
          
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="sr" id="sr">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://img.lovepik.com/photo/50110/5251.jpg_wh860.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://img.lovepik.com/photo/50042/1067.jpg_wh860.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mtrend.vn/wp-content/uploads/2015/09/hinh-nen-am-nhac-cho-dien-thoai-e1443603648990.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
		
		</div>
		<div class="product-group">
			<div class="row">
      <?php
				$db = mysqli_connect("localhost","root","","sdlc");
				$rt = "SELECT * FROM song LIMIT 12";
				$hi = mysqli_query($db, $rt);
				while($av = mysqli_fetch_assoc($hi)){
					?>
					<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src=" <?php echo $av['Song_image'] ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $av['Song_name'] ?></h5>
              <audio id="audio_1" style="width: 230px"controls controlsList="nodownload" ><source src="audio/<?php echo $av['Song_mp3']  ?>" type="audio/mpeg" >
								</audio>
					    <p class="card-text"></p>
					    <a href="cart.php?id=<?php echo $av["Song_id"];?>" class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>
				<?php
											}
			?>								
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<a href="index.php" class="backup">Back up Home page</a>
</body>

</html>