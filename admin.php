<?php
include("inc2/connect.php");
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty( $_GET['idxoa'])){
    $idxoa = $_GET['idxoa'];
$sql = "DELETE from song WHERE Song_id = {$idxoa} limit 1 ";
if(mysqli_query($connect,$sql)){
    echo "delete succes".$idxoa;

}
else{
    echo "failed".mysqli_error($connect);
}
}
include("inc1/header.php");
include("listsp.php");

