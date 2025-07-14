<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
if(isset($_POST['submit'])){
    // echo $_POST['name'];
    // echo $_POST['email'];
    $name=$_POST['fname'];
    $age=$_POST['age'];
    // extract($_POST);
}
?>
Name : <?php echo $_POST["name"]; ?><br>

</table>
</body>
</html>