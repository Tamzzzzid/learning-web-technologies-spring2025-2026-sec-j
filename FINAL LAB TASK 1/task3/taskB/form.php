<?php 
  if(isset($_POST["submit"])){

    $dd=isset($_POST["dd"])?$_POST["dd"]:null;
    $mm=isset($_POST["mm"])?$_POST["mm"]:null;
    $yyyy=isset($_POST["yyyy"])?$_POST["yyyy"]:null;
    if($dd==null || $mm==null || $yyyy==null){echo"missing input";return;}
    echo "{$dd} / {$mm}  /  {$yyyy}";


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
    <fieldset style="width:25%">
        <legend>Date of birth</legend>
        <form action="" method="post">
          <b>dd     mm     yyyy</b> <br>
          <input type="text" name="dd" size="1"> / 
          <input type="text" name="mm" size="1"> / 
          <input type="text" name="yyyy" size="1"> <hr>
          <input type="submit" name="submit">
        </form>
    </fieldset>
    
</body>
</html>
