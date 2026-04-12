<?php 
    if(isset($_REQUEST['submit'])){
            //print_r($_GET);

            $username = $_REQUEST['user'];
            
            if(isset($_REQUEST['user'])){
                echo $username;}
            } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Name</legend>
             <input type="text" name="user">
             <hr>
             <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
