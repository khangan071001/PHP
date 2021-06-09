<?php
$id = $_GET["id"];
$db=mysqli_connect("localhost","root","","sdlc");
$qr4 = 'SELECT * FROM song WHERE Song_id = '.$id.'';
$rt1 = mysqli_query($db, $qr4);
while($row = mysqli_fetch_assoc($rt1)){
    $im = $row["Song_image"];
    $nq = "INSERT INTO cart VALUES ('5',1,1,".$id.",'".$im."')";
    $rs = mysqli_query($db, $nq);
    sleep(5);
    header('location: index.php');
}
?>