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
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $NIC=$_POST['NIC'];
    $dateofbirth=$_POST['dateofbirth'];
    $number=$_POST['number'];
    // $gender=isset($_POST['gender']) ? $_POST['gender'] :
    // $courseselection = isset($_POST['course']) ? $_POST['course'] : 'None'; 
    // $selectcountry = $_POST['country'];
    // extract($_POST);
}
?>
<table align="center" border="1" cellpadding="10" cellspacing="0">
<h3 style="text-align:center; margin-top: 20px;">Registration Form</h3>
<tr>
<td>First name</td>
<td>
<?php echo ($fname); ?>
</td>
</tr>
<tr>
    <td>Last name</td>
    <td><?php echo ($lname); ?> </td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo ($email); ?> </td>
</tr>
<tr>
    <td>Password</td>
    <td><?php echo ($password); ?> </td>
</tr>

<tr>
    <td>NIC</td>
    <td><?php echo ($NIC); ?> </td>
</tr>

<tr>
    <td>Date of birth</td>
    <td><?php echo ($dateofbirth); ?> </td>
</tr>

<tr>
    <td>Phone number</td>
    <td> <?php echo ($number); ?></td>
</tr>

<tr>
<td>Gender</td>
    <td><?php echo ($gender); ?></td>
</tr>

<tr>
    <td>Courses selected</td>
    <td><?php echo ($courseselection); ?></td>  
</tr>

<tr>
    <td>Country</td>
    <td><?php echo ($selectcountry); ?></td>
</tr>
   

</table>
</body>
</html>