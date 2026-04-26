<?php 
    session_start();

    

   

    if(isset($_POST['submit'])){
        
        $name = $_POST['pname'] ?? "";
        $price = $_POST['pprice'] ?? "";

        if($name != "" && $price != "") {
            $pr = ["id" => $_SESSION['id'] += 1, "name" => $name, "price" => $price];
            
           
            $_SESSION['product'][] = $pr;
            $_SESSION['chk']=false; 
            
            header("Location: home.php");
            
        }
    }
    
?>
