<?php
$cookie_name = "user";
$cookie_value = "Hello everyone";
setcookie($cookie_name,$cookie_value,time() + (86400 * 30) , "/");  //60*60*24
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set";

    }else{
    echo $_COOKIE[$cookie_name];
    }
    ?>

</body>
</html>



<!-- <!DOCTYPE html>
 <?php
    //setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
?> 
<html>
<body>
    <?php
      //   echo "cookie is created."; 
    ?>
    <p>
        <strong>Note:</strong> 
        You might have to reload the 
        page to see the value of the cookie.
    </p>

</body>
</html> -->