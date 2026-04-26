<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == "" ){
            echo "null username/password/email!";
        }else{
           
            $user = ['username'=>$username, 'password'=> $password];
            $_SESSION['user'] = $user;
            header('location:login.php');
        }
    }else{
        echo "please submit form...";
    }

?>