 <?php 
 session_start();
require_once("inc/connect.php");

 ?>
 <div class="container-fluid">
 <div class="row">
  <link rel="stylesheet" type="text/css" href="cart.css">
  <?php 
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) :
    ?>
    <div class="products" style="border: 2px solid black">
    <a href="product.php?id=<?php echo $item['Song_id']?>" style="text-decoration: none;">
    <div><img src="<?php echo $item['Song_image']?>" class="img-cart"></div>
    <h2><?php echo $item['Song_name'] ?></h2>
        <audio controls controlsList="autodownload">
          <source src="Music/<?php echo $item['Song_mp3'] ?>" type="audio/mpeg">
          </audio>
         </a>
         <br>
         <h4>Click on icon <i class="fas fa-ellipsis-v"></i> to download</h4>
         </div>
           <?php
  endforeach;
  }else{
    echo "dmmmmmmm";
  }
     ?>
  </div>  
