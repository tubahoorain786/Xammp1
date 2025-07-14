
 <!-- This line is used when database connection fails, and it gives a clear error message.
mysqli_connect_error() function:
Returns a description of the last connection error. -->

<?php
// $hostname = 'localhost';
// $username = 'root';
// $password = ''; // no password
// $database = 'harrypotter';

// $con = mysqli_connect($hostname, $username, $password, $database);

// if ($con) {
//     echo "Successfully connected";
// } else {

//     die("Connection failed: " . mysqli_connect_error());
// }

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'harrypotter1';

$con = mysqli_connect($hostname, $username, $password, $database);

if ($con){
    echo "successfully connected";
}
else{
    die("connection failed :".mysqli_connect_error());
}
?>
