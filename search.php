<?php
include('inc/connect.php');
// include('inc/header.php'); 
$search = "";
if( !empty($_GET['sr'])){
  $search = $_GET['sr'];
}
?>
 <h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
    if( !empty($search)) {
      $rs = mysqli_query( $connect ,"SELECT * FROM song,singer WHERE song.Song_name LIKE '%{$search}%' and song.Singer_id=singer.Singer_id and song.Decription=song.Decription");
      while($row = mysqli_fetch_assoc($rs)){
    ?>
    <div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px; 
          border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
              <a href="product.php?id=<?php echo $row['Song_id']?>" style=" text-decoration: none; 
            text-align: center;">
            <div style="height:80px">
              <h2><?php echo $row['Song_name'] ?></h2>
              </div>
              <div><img src="<?php echo $row['Song_image']?>" style="width: 247px;height: 200px;padding: 7px"></div>
              <p style="color: red"><?php echo $row['Price']." $"; ?></p>
              <h4 style="color: #3BA33D"><?php echo $row['Singer_name'] ?></h4>
              
            </a>
            <a href="cart.php?id=<?php echo $row["Song_id"];?>" class="btn btn-primary">Add to Cart</a>
          </div>
         <?php
     }
    }
    ?>
    <a href="product.php"><button>Back product</button></a>
  </div>
  </div>
  