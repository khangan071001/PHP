<?php
session_start();
include("inc/connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tensp = $_POST['tensp'];
    $singer = $_POST['singer'];
    $mp3 = $_POST['mp3'];
    $mota = $_POST['noidung'];
    $giasp = $_POST['giasp'];
    $db = mysqli_connect("localhost","root","","sdlc");
    $sql = "INSERT INTO song( Song_name, Decription , Song_mp3, Price,Singer_id ) VALUES ('$tensp','$mota','$mp3','$giasp','$singer')";
    $stmt = mysqli_prepare($connect, $sql);
    // mysqli_stmt_bind_param( $stmt, "song", $tensp, $mota,$giasp);
   $resuilt = mysqli_query($db,$sql);
   

}
include("inc1/header.php");;
?>
<form class="form" method="post">
    <label>Enter name product</label>
    <input type="text" name="tensp" id= "tensp">    
    <label>Product details</label>
    <textarea name="noidung" id="noidung"></textarea>
    <label>Enter price product</label>
    <input type="number" name="giasp" id="giasp">
    <label>Enter name music.mp3</label>
    <input type="text" name="mp3" id= "mp3">  
    <label >Enter Singer ID</label>
    <input type="text" name ="singer" id="singer">
    <label>pick product</label>
    <input type="file" name="anhsp">
    <input type="submit" name="submit" value="them">
    </form>

    

