<?php 
session_start();
if(!$_SESSION['id']){$_SESSION['id']=0;}
if(!$_SESSION['user']){
    $_SESSION['user']=[
        ["id" => $_SESSION['id']+=1,"name" => "Iphone17","price" => "1000$"],
        ["id" => $_SESSION['id']+=1,"name" => "Iphone16","price" => "700$"],
    ];
    
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
    <table border=1 style="width : 500px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>

        </tr>
        <?php ?>
    </table>
    
</body>
</html>