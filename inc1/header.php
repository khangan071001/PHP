<?php 
	// session_start(); //khoi tao session => có thể sử dụng dc biến $_SESSION  

	if( !empty( $_SESSION['user'] ) ){
		echo "hello: " . $_SESSION['user'];
	}else

	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="asset/admin.css" />
</head>
<body>

<div class="header">
  <h1>MY ADMIN</h1>
</div>

<div class="row">
  <div class="leftcolumn">
  	<!-- navigation -->
	<div class="topnav">

	<a href="themsp.php">Add product  </a>	
	  <hr>
	  	 
	  <a href="suasp.php">Update product</a>
	  <a href="index.php">article management  </a>
	  <a href="#">User managerment</a>
	  <a href="logout.php">logout </a>

	</div>

	<!-- END navigation -->
  </div>
 <!-- END left column -->


  <div class="rightcolumn">