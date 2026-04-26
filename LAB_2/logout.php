<?php 
session_start();
session_destroy();
header("Location: public.html");
setcookie('status','true',time()-10,'/');
?>