<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["user"])){
            ?>
                <div class="cart">
        <a href="index.php"><i class="fa fa-times cart__right__close" aria-hidden="true"></i></a>
        <div class="cart__left">
            <div class="cart__header">
                <h3 class="cart__header__content">SONG</h3>
                <h3 class="cart__header__content">PRICE</h3>
                <h3 class="cart__header__content">QUANTITY</h3>
                <h3 class="cart__header__content">TOTAL</h3>
            </div>
            <div class="cart__list">
                <?php
                    $db=mysqli_connect("localhost","root","","sdlc");
                    $qr4 = 'SELECT * FROM song_cart';
                    $rt = mysqli_query($db, $qr4);
                    while($row = mysqli_fetch_assoc($rt)){
                        ?>
                        <div class="cart__item">
                            <div class="cart__item__image">
                                <img src="<?php echo $row["Song_image"]; ?>" alt="">
                                <h4 class="cart__item__image__name">
                                    <?php
                                        $qrr = "SELECT Song_name FROM song WHERE Song_id = {$row["Song_id"]}";
                                        $rss = mysqli_query($db,$qrr);
                                        while($kq = mysqli_fetch_assoc($rss)){
                                            echo $kq["Song_name"];
                                        }
                                    ?>
                                </h4>
                                <p class="cart__item__image__singer"><?php 
                                $qr = "SELECT Singer_id FROM song WHERE Song_id = {$row["Song_id"]}";
                                $rs = mysqli_query($db,$qr);
                                while($kq = mysqli_fetch_assoc($rs)){
                                    $n = "SELECT Singer_name FROM singer WHERE Singer_id = {$kq["Singer_id"]}";
                                    $srl = mysqli_query($db, $n);
                                    // while($rt = mysqli_fetch_assoc($srl)){
                                    //     echo $rt["Singer_Name"];
                                    // }
                                }
                                ?></p>
                                <i class="fa fa-times cart__item__image__close" aria-hidden="true"></i>
                            </div>
                            <div class="cart__details">
                                <h5 class="cart__item__price"><?php echo $row["Price"]; ?>$</h5>
                                <div class="cart__item__quantity">
                                    <i class="fa fa-minus cart__item__minus" aria-hidden="true"></i>
                                    <span class="cart__item__quantity__number"><?php echo $row["Quantity"];  ?></span>
                                    <i class="fa fa-plus cart__item__plus" aria-hidden="true"></i>
                                </div>
                                <h5 class="cart__item__total">0$</h5>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="cart__right">
            <div class="cart__right__total">
                <h3 class="cart__right__total__text">TOTAL</h3>
                <h5 class="cart__right__total__price">0</h5>
            </div>
            <div class="cart__right__check">
                <button class="cart__right__check__out">Check out</button>
            </div>
        </div>
    </div>


            <?php

        }else{
            header('location: login.php');
        }
    ?>

</body>
<script>

    const plus = document.querySelectorAll('.cart__item__plus');
    const minus = document.querySelectorAll('.cart__item__minus');
    const rootPrice = document.querySelectorAll('.cart__item__price');
    const price = document.querySelectorAll('.cart__item__total');
    const quantity = document.getElementsByClassName('cart__item__quantity__number');
    const total = document.querySelector('.cart__right__total__price');
    var tt = 0;
    var ar = [];
    var ar2 = [];
    for(let k =0; k <price.length; k++){
        ar2.push(parseInt(price[k].innerHTML));
    }
    var sm = ar2.reduce(function(a,b){return a+ b},0);
    total.innerHTML = sm +'$';
    for(let i =0; i< plus.length; i++){
        plus[i].onclick = () =>{
             quantity[i].innerHTML = parseInt((quantity[i]).innerHTML) + 1;
             price[i].innerHTML = parseInt((quantity[i]).innerHTML) * parseInt(rootPrice[i].innerHTML);
             for(let j =0; j <price.length; j++){
                 ar.push (parseInt(price[j].innerHTML));
             }
            var sum = ar.reduce(function(a,b){return a+ b;},0);
            total.innerHTML = sum + '$';
            ar = [];
        }
        minus[i].onclick = () =>{
           if(parseInt((quantity[i]).innerHTML) > 0){
            quantity[i].innerHTML = parseInt((quantity[i]).innerHTML) - 1;
             price[i].innerHTML = parseInt((quantity[i]).innerHTML) * parseInt(rootPrice[i].innerHTML);
             for(let j =0; j <price.length; j++){
                 ar.push (parseInt(price[j].innerHTML));
             }
            var sum = ar.reduce(function(a,b){return a+ b;},0);
            total.innerHTML = sum +'$';
            ar = [];
           }
        }
    }
</script>
</html>