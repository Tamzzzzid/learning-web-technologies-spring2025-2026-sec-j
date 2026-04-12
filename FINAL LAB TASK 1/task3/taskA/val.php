<?php 
  if(isset($_POST["submit"])){

    $dd=isset($_POST["dd"])?$_POST["dd"]:null;
    $mm=isset($_POST["mm"])?$_POST["mm"]:null;
    $yyyy=isset($_POST["yyyy"])?$_POST["yyyy"]:null;
    if($dd==null || $mm==null || $yyyy==null){echo"missing input";return;}
    echo "{$dd} / {$mm}  /  {$yyyy}";


  }
?>