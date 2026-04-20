<?php
   session_start(); 
   if(isset($_POST["submit"])){
     if(empty($_POST["name"])){
        ?>
        <script>
            alert("Please enter a username");
        </script>
        <?php 
     }
   }
   $_SESSION["name"]=$_POST["name"]??"";
   if(empty($_POST["pass"])){
    ?>
        <script>
            alert("Please enter a password");
        </script>
    <?php
       
   }
   $_SESSION["pass"]=$_POST["pass"]??"";


   if(empty($_POST["email"])){
    ?>
        <script>
            alert("Please enter a email");
        </script>
    <?php
       
   }
   $_SESSION["email"]=$_POST["email"]??"";
   $_SESSION["gender"]=$_POST["gender"]??"";
   $dd=$_POST["dd"]??"" ;
   $mm=$_POST["mm"]??"" ;
   $yy=$_POST["yy"]??"" ;
   $dob=$dd."-".$mm."-".$yy;
   $_SESSION["dob"]=$dob;
       


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="700" align="center">
            <tr>
                <td style="padding: 15px; font-size: 22px;">
                <b><span style="color: #2e8b57; font-size: 32px;">X</span>Company</b>
                </td>
                <td align="right" style="padding: 15px;">
                    <a href="public.html" style="color: blue; text-decoration: none;">Home</a> | 
                    <a href="login.php" style="color: blue; text-decoration: none;">Login</a> | 
                    <a href="reg.php" style="color: blue; text-decoration: none;">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <form action="" method="post">
                        <label>Name : </label>
                        <input type="text"  size="60" >
                        <hr>
                        <label>email : </label>
                        <input type="text"  size="60"  name="email">
                        <hr>

                        
                        <label>Username : </label>
                        <input type="text"  size="60" name="name">
                        <hr>


                        
                        <label>Password : </label>
                        <input type="text"  size="60" name="pass">
                        <hr>

                        
                        <label>Confirm Password : </label>
                        <input type="text"  size="60">
                        <hr>

                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" value="male" name="gender">Male
                            <input type="radio" value="female" name="gender">Female
                            <input type="radio" value="other" name="gender">Other
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="text" size="3" name="dd">/
                            <input type="text" size="3" name="mm">/
                            <input type="text" size="3" name="yy"> (dd/mm/yyyy)
                        </fieldset>
                        <hr>
                        <input type="submit" value="submit" name="submit">
                        <input type="reset">



                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="padding: 15px; font-size: 14px;">
                Copyright &copy; 2017
            </td>
            </tr>
    </table>
</body>
</html>