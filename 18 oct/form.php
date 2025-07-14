<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form file.php" method="post">
        <h3 style="text-align:center;">Registration Form</h3>
        <table align="center" border="1" cellspacing="0" cellpadding="10"  >
            <tr>
                <td>First name</td>
                <td ><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td style><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <!-- <td>NIC</td>
                <td><input type="NIC" name="NIC"></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td><input type="date" name="dateofbirth"></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="number" name="number"></td>
            </tr> -->
            <!-- <tr>
                <td>Select your gender</td>
            
                <td>
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Male"> Male
                </td>
            </tr> -->
            <tr>
                <td>Course Selection</td>
            
                <td>
                    PHP <input type="checkbox" name="course[]" value="PHP"> 
                    JAVA <input type="checkbox" name="course[]" value="JAVA">
                    SQL <input type="checkbox" name="course[]" value="SQL">
                </td>
            </tr>

     <tr>
            <td>select your county</td>
              <td>
                   <select name="country">
                        <option >Pakistan</option>
                        <option >India</option>
                        <option >KPK</option>
                        <option >Malaysia</option>
                    </select>
              </td>
     </tr>


            <tr align="center">
    
                <td colspan="2"><input type="submit" name="submit"></td>
            </tr>

       
        </table>
    </form>
</body>
</html>