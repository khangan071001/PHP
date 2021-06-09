<?php 
include( "inc1/connect.php" );
session_start();

if(   $_SERVER['REQUEST_METHOD'] == 'POST' ){

	$id = $_GET['id'];
	$tensp = $_POST['tensp'];
	$giasp= $_POST['giasp'];
	$mota = $_POST['mota'];

	$file = $_FILES['anhsp']; // 1 mang chua thong tin file da upload  

	//chỉ update file nếu người dùng có chọn file upload.

	if( !empty( $file ) ){
		$connect = mysqli_connect("localhost","root","","sdlc");
		$tenFile = rand() . $file['name']; //asdasd232anh.jpg cho hai file trong thu muc khong bi trung=>ten file luu trong server
		if( move_uploaded_file($file['tmp_name'], "img/" . $tenFile ) ){

			$sql = "UPDATE song SET Song_image=? WHERE Song_id=? "; //php prepare statement
			$stmt = mysqli_prepare($connect ,$sql);
			mysqli_stmt_bind_param( $stmt, "sd" , $tenFile, $id );
			mysqli_stmt_execute($stmt);
			echo "Update hình ảnh thành công! <br/>";

		}
		else{
			echo "Có lỗi khi upload file ! ";
		}	
	}
	


	// $anh = $_POST['anhsp'];
	//$q = "UPDATE product SET tieude =  , noidung = $noidung , anh ='{$anh}' "; //gay co kha nang loi sql injection + gay kho viet 
	// mysqli_query($conn , $q);


	$sql = "UPDATE song SET Song_name=?, Decription=?, Price=?  WHERE Song_id=? "; //php prepare statement
	$stmt = mysqli_prepare($connect ,$sql);
	mysqli_stmt_bind_param( $stmt, "ssdd" , $tensp, $mota, $giasp, $id );

	//s = string 
	// d = double 
	// i = integer
	if( mysqli_stmt_execute($stmt) ) {
		echo "đã cập nhật sản phẩm thành công! ";
	}else{
		echo "Lõi : " . mysqli_error($connect);//ham lay loi gan nhat cua connection sinh ra
	}


}// POST 

//lay id san pham 

$connect = mysqli_connect("localhost","root","","sdlc");
$id = $_GET['id'];
$sql = mysqli_query( $connect , "SELECT * FROM song WHERE Song_id={$id}" );
$row =  mysqli_fetch_assoc($sql);
include ("inc1/header.php");
?>
	<h2> Update product: <?= $row['Song_name'] ?> </h2>

	<!-- phai co ectype="multipart/form-data" thi moi upload dc file len server  -->
	<form class="form" method="post" enctype="multipart/form-data">
	  <label>Enter name product </label>
		<input type="text" name="tensp" value="<?= $row['Song_name'] ?>"/>
		<label>Enter price of product</label>
		<input type="number" name="giasp" value="<?= $row['Price'] ?>">

		<label>Enter Decription</label>
		<textarea name="mota"><?= $row['Decription']?></textarea>
		<label>Image</label>
		<img class="anhsp" src="img/<?= $row['Song_image']?>" /> 
	    <input type="file" name="anhsp" >
		<input type="submit" name="submit" value="Update ">
	</form>
<?php 	
