<?php
  session_start();
  $_SESSION["chk"]=false;
  setcookie('status','false',time()+100000,'/');
  if(!empty($_POST["submit"])){
    if(empty($_POST["name"])){
        ?>
        <script>alert("user name missing")</script>
        <?php
    }
    if(empty($_POST["pass"])){
        ?>
        <script>alert("Password missing")</script>
        <?php
    }
    $nam=$_POST["name"] ?? "";
    $pass=$_POST["pass"] ?? "";
    if($nam!="" && $pass!=""){
        if($nam==$_SESSION["name"] && $pass==$_SESSION["pass"]){
             $_SESSION["chk"]=true;
             if($_POST['cok']=="cok"){
                setcookie('status','true',time()+100000,'/');
             }
             header("Location: dashboard.php");
        }
        else{
            echo"invalid username or pass";
        }
    }

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
        <table border="1" width="600" align="center" cellpadding="10">

        
        <tr>
            <td>
                <b>X Company</b>
                <span style="float:right;">
                    <a href="public.html">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="reg.php">Registration</a>
                </span>
            </td>
        </tr>

        <tr>
            <td align="center">
                <fieldset style="width:300px;">
                    <legend><b>LOGIN</b></legend>

                    <form action="" method="post">
                        User Name : <input type="text" name="name"><br><br>
                        Password &nbsp;&nbsp;: <input type="password" name="pass"><br><br>

                        <hr>

                        <input type="checkbox" name="cok" value="cok"> Remember Me <br><br>

                        <input type="submit" value="Submit" name="submit">
                        <a href="forget.php">Forgot Password?</a>
                    </form>

                </fieldset>
            </td>
        </tr>


        <tr>
            <td align="center">
                Copyright © 2017
            </td>
        </tr>

    </table>
    
</body>
</html>