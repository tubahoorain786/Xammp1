<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

   echo $file_name = $_FILES['image']['name'];
   echo $file_size = $_FILES['image']['size'];
   echo $file_tmp = $_FILES['image']['tmp_name'];
   echo $file_type = $_FILES['image']['type'];

   move_uploaded_file($file_tmp, "upload_image/" .$file_name);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit">
    </form>
</body>
</html>