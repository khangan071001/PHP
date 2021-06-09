<form method="post" enctype="multipart/form-data">
            <input type="text" name="Song_name" placeholder="enter name">
            <input type="text" name="Price" placeholder="enter price">
            <input type="text" name="Decription" placeholder="enter decription">
            <input type="file" name="Song_image" placeholder="Enter lyric">
            <input type="file" name="Song_mp3" placeholder="Enter lyric">
            <select name="singer_id">
<option value="7">sontung</option>
<option value="5">quân AP</option>
<br><br>
</select>
<select name="genre_id">
<option value="8">jock</option>
<option value="10">rap</option>
<br><br>
</select>
            <input type="submit" name="ADD" value="ADD">
        </form>
    </div>
    <?php
      $conn = mysqli_connect('localhost','root','','sdlc');
      if (isset($_POST['ADD'])) {
        $path = "img/imgadd"; 
         $tmp_name = $_FILES['Song_image']['tmp_name'];
         $name = $_FILES['Song_image']['name'];
         move_uploaded_file($tmp_name, $path . $name);
         $image_url = $path . $name;
         $path1 = "Mucsic/mysong/";
         $tmp_name1 = $_FILES['ong_mp3']['tmp_name'];
         $name1 = $_FILES['Song_mp3']['name'];
         move_uploaded_file($tmp_name1, $path1 . $name1);
         $mp3_url = $path1 . $name1;
      $song_name = $_POST['Song_name'];
      
      $song_price = $_POST['Price'];
      $singer_id = $_POST['Singer_id'];
      
      $sql="insert into song values ('','$song_name','$singer_id','$image_url','$song_price')";
      $result = mysqli_query($conn,$sql);
      if ($result) {
        echo "<script>alert('Account has been created successfully!')</script>";
                   }
      else{
        echo"<script>alert('Error')</script>";
          } 
    }
    ?>