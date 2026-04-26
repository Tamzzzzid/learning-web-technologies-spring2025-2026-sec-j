<?php
  session_start();
  if(!empty($_POST["submit"])){
    if(empty($_POST["email"])){
        ?>
        <script>alert("email missing")</script>
        <?php
    }
    
    $nam=$_POST["email"] ?? "";
    if($nam!=""){
        if($nam==$_SESSION["email"] ){
            header("Location: dashboard.php");
        
        }
        else{
            echo"invalid email";
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
    <table border="1" width="700" align="center" cellpadding="10">

    
    <tr>
        <td>
            <b style="font-size:20px;">X Company</b>

            <span style="float:right;">
                <a href="public.html">Home</a> |
                <a href="login.php">Login</a> |
                <a href="reg.php">Registration</a>
            </span>
        </td>
    </tr>

    
    <tr>
        <td align="center" style="height:200px;">
            
            <fieldset style="width:400px; text-align:left;">
                <legend><b>FORGOT PASSWORD</b></legend>

                <form action="" method="post">
                    Enter Email: 
                    <input type="text" name="email" style="width:200px;"><br><br>

                    <hr>

                    <input type="submit" value="Submit" name="submit">
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