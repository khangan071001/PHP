
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
            <h2>Member Login</h2>
         <form method="POST" action="xllogin.php">
        <br>
        <p>Enter your name</p>
        <br>
        <input type="text" name="name" placeholder="USer name">
        <br>
        <p>password</p> <br>
        <input type="password" name="pass" placeholder="Enter password">
        <br>
        <div class="check">
            <input type="checkbox">
            Remember me
        </div>
        <br>
        <button>Login</button> <br>     
        <a href="#">Forgot password</a>
        <a href="res.php">create an account</a> 
        </form>
        <?php
            if(isset($er)){
                echo $er;
            }
        ?>
    </div>
</body>
</html>