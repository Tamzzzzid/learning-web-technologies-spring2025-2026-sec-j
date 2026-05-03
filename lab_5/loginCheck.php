<?php
    session_start();
    
    $jsonString = file_get_contents("php://input");
    
    $requestData = json_decode($jsonString, true);

    if(isset($requestData['submit'])){

        $username = $requestData['username'];
        $password = $requestData['password'];
        
        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{
            if(isset($_SESSION['user']) && $username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
                echo "Login Successful";
            }else{
                echo "Invalid user!";
            }
        }
    }else{
        echo "please submit form...";
    }
?>