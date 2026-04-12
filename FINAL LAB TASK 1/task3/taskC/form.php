

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
          <b>dd mm yyyy</b> <br>
          
          <input type="text" name="dd" size="1" value="<?php echo $dd; ?>"> / 
          <input type="text" name="mm" size="1" value="<?php echo $mm; ?>"> / 
          <input type="text" name="yyyy" size="1" value="<?php echo $yyyy; ?>">
          <hr>
          <input type="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>

<?php 
$dd = $_POST['dd'] ?? '';
$mm = $_POST['mm'] ?? '';
$yyyy = $_POST['yyyy'] ?? '';

if(isset($_POST["submit"])){
    if($dd == '' || $mm == '' || $yyyy == ''){
        echo "missing input";
    } else {
        echo "{$dd} / {$mm} / {$yyyy}";
    }
}
?>