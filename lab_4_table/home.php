<?php 
session_start();

if(!isset($_SESSION['id'])){
    $_SESSION['id'] = 0;
}

if($_SESSION['chk']==true){
    $_SESSION['product'] = [
        ["id" => $_SESSION['id'] += 1, "name" => "Iphone17", "price" => "1000$"],
        ["id" => $_SESSION['id'] += 1, "name" => "Iphone16", "price" => "700$"]
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

    <table border="1" style="width: 500px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php 
            
            foreach($_SESSION['product'] as $prod){
        ?> 
             <tr>
                 <td> <?php echo $prod['id']; ?> </td>
                 <td> <?php echo $prod['name']; ?> </td>
                 <td> <?php echo $prod['price']; ?> </td>
                 <td>
                    <a href="">Delete</a> /
                    <a href="">Edit</a> /
                    <a href="add.php">Add</a>
                 </td>
            </tr>
        <?php
            }
        ?>
    </table> <br> <br> 
    <a href="logout.php">log out</a>

</body>
</html>

