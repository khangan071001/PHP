<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
$pass=$_POST["pass"];
$db=mysqli_connect("localhost","root", "", "sdlc");
$sql="SELECT * FROM userr WHERE User_name='$name' AND Password='$pass'";
$rs=mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($rs)){
        if(mysqli_num_rows($rs)){
            $user = $name;
            if($row["Role"] == '0'){
                $_SESSION['user'] = $row['User_name'];
                header("location: admin.php");
            }
            else{
                $_SESSION['user'] = $row['User_name'];
                header("location: index.php");
            }
            
        }
        else{
            $er="User name or password is incorrect";
            require_once('login.php');
        }
    }
}
?>