<?php
    session_start();
    $id = $_GET['id'];
    $products = $_SESSION['product'];
    $pro= [];
    foreach($product as $p){
        if($p['id'] == $id){
            $pro = $p;
            break;
        }
    }
?>


<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
        <h1>Edit User</h1>
        <a href='user_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/updateCheck.php" enctype="multipart/form-data">
            Name:         <input type="text" name="name" value="<?=$pro['name']?>"/> <br>
            price:   <input type="text" name="price" value="<?=$pro['price']?>"/> <br>
                        <input type="submit" name="submit" value="Update"/>
                        
        </form>
</body>
</html>