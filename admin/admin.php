<?php
include("../inc1/connect.php");
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $_GET['idxoa'])){
    $idxoa = $_GET['idxoa'];
$sql = "DELETE from sdlc WHERE Song_id = {$idxoa} limit 1 ";
if(mysqli_query($connect,$sql)){
    echo "delete succes".$idxoa;

}
else{
    echo "failed".mysqli_error($connect);
}
}
include("inc/header.php");
include("listsp.php");

