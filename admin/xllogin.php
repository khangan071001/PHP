<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
$pass=$_POST["pass"];
$db=mysqli_connect("localhost","root", "", "sdlc");
$sql="SELECT * FROM userr WHERE User_name='$name' AND Password='$pass'";
$rs=mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
    $_SESSION['user'] = $user['User_name'];
    $user = $name;
    require_once('index.php');
}
else{
    $er="User name or password is incorrect";
    require_once('login.php');
}
}
?>