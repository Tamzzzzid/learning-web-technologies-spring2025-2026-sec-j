<?php 
session_start();
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
                    <td align="right" valign="middle">
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
            <h3>Welcome <?php echo $_SESSION['name'] ?></h3>
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