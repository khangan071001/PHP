<!-- <?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
    $pass=$_POST["password"];
    $fname =$_POST["fname"];
    $address =$_POST["address"];
    $phone = $_POST["phone"];
    $email =$_POST["email"];
    $db=mysqli_connect("localhost","root", "", "sdlc");
    $sql="insert into userr(Full_name,Phone_number,Address,Email,User_name,Password) values ('$fname','$phone','$address','$email','$name','$pass')" ;
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

?> -->
  <?php
  include("inc/connect.php");
  if (isset($_POST['register'])) { 
    // $file =$_FILES['image']['name'];
    // print_r($_FILES['image']);
    // $file_tmp =$_FILES['image']['tmp_name'];
    // $path = "Avartar/";
    // move_uploaded_file($file_tmp,$path.$file);

    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $fullname=$_POST['fullname'];
    // $sql="insert into users values (NULL,'$username','$password','$fullname','$file')";
    $name=$_POST["name"];
    $pass=$_POST["password"];
    $fname =$_POST["fname"];
    $address =$_POST["address"];
    $phone = $_POST["phone"];
    $email =$_POST["email"];    
    $sql="insert into userr(Full_name,Phone_number,Address,Email,User_name,Password) values ('$fname','$phone','$address','$email','$name','$pass')" ;
    $result = mysqli_query($connect,$sql);
    if ($result) {
      echo "<script>alert('Account has been created successfully!')</script>";
     //echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>