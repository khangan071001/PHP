<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $db = mysqli_connect("localhost","root","","sdlc");
    $value = $_GET['sr'];
    $qr = "SELECT * from song where Song_name like '%$value%'";
    $rs = mysqli_query($db, $qr);
    while($row = mysqli_fetch_assoc($rs)){
        if(mysqli_num_rows($rs)){
            echo $row['Song_name'];
        }
        else{
            echo "no result";
        }
    }
?>
</body>
</html>