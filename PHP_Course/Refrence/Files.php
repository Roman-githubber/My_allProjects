<html>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="" />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
if(isset($_FILES['image'])){
   echo "<pre>";
   print_r($_FILES);
   echo "</pre>";

 $file_name =$_FILES['image']['name'];
 $file_tmp = $_FILES['image']['tmp_name'];
 $file_size = $_FILES['image']['size'];
 $file_type = $_FILES['image']['type'];

if(move_uploaded_file($file_tmp, "/home/kislay/Desktop/$file_name")){
echo "Uploaded Success";
}else{ echo "Not Upload the file";}

}

?>


</body>

</html>