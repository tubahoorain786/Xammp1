<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"><br><br>
        Name : <input type="text" name="fname" placeholder="Enter your name"><br><br>
        Age : <input type="text" name="age" placeholder="Enter your age"><br><br>
        <input type="submit" name="btn">
        <br><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    echo $_POST['fname'] ."<br>";
    echo $_POST['age'];

}

?>