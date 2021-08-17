<?php
 $servername = "ec2-3-89-0-52.compute-1.amazonaws.com";
 $username = "hzgrxatcmcmjpn";
 $pass = "f2edb126b7b6d8e90d6eb4e13f3d01c3760d4cf5839254ca684855401e2bf51a";
 $dbname = "d2sc1mhh1k30ja";

 $connect = mysqli_connect($servername, $username, $pass, $dbname);
 if (!$connect){
     die ("ket noi bi loi". mysqli_connect_error());
 }
 else{
     echo "";
 }
?>