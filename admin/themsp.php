<?php
session_start();
include("../inc/connect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tensp = $_POST['tensp'];
    $mota = $_POST['noidung'];
    $giasp = $_POST['giasp'];
    $sql = "INSERT INTO shopxe( Ten, Noidung, Giatien ) VALUE (?,?,?,)";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param( $stmt, "ssd", $tensp, $mota,$giasp);
    if(mysqli_stmt_execute($stmt)){
        echo "add succes";
    }
    else{
        echo "failed".mysqli_error($connect);
    }
}
include("inc/header.php");;
?>
<form class="form" method="post">
    <label>enter name product</label>
    <input type="text" name="tensp">
    <label>enter price product</label>
    <input type="number" name="giasp">
    <label>product details</label>
    <textarea name="noidung"></textarea>
    <label>pick product</label>
    <input type="file" name="anhsp">
    <input type="submit" name="submit" value="them">
    </form>

    

