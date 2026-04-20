<?php 
   session_start();
   
   if(!empty($_POST["submit"])) {
        $_SESSION["name"]=$_POST["name"]??"";
        $_SESSION["email"]=$_POST["email"]??"";
        $_SESSION["gender"]=$_POST["gender"]??"";
        $_SESSION["dob"]=$_POST["dob"]??"";
    
   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>XCompany Dashboard</title>
</head>
<body>

<table border="1" width="800" cellspacing="0" cellpadding="15" align="center">

    <tr>
        <td colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="middle">
                        <font color="green" size="6"><i><b>X</b></i></font><font size="5"><b>Company</b></font>
                    </td>
                    <td align="right" valign="right" colspan="3">
                        Logged in as <a href="#">Bob</a> | <a href="#">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr height="250">
        <td width="30%" valign="top">
            <h3>Account</h3>
            <hr width="100%" align="left">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </td>
        
        <td width="70%" valign="top">
            
            <form action="" method="post">
                Nmae : <input type="text" name="name">  <hr>
                Email : <input type="text" name="email"> <hr>
                Gender : <input type="radio" name="gender" value="male">Male 
                        <input type="radio" name="gender" value="female">Female 
                        <input type="radio" name="gender" value="other">Other  <hr>
                Date of birth <input type="text" name="dob"> <hr>
                <input type="submit" name="submit">


            </form>


            
        </td>
        <td>
            <img src="no_dp.webp" alt="" width="80px">
            <a href=""> change</a>

        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>

</table>

</body>
</html>