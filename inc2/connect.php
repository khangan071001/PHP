<?php
 $servername = "localhost";
 $username = "root";
 $pass = "";
 $dbname = "sdlc";

 $connect = mysqli_connect($servername, $username, $pass, $dbname);
 if (!$connect){
     die ("ket noi bi loi". mysqli_connect_error());
 }
 else{
     echo "Sucsessfull";
 }
?>