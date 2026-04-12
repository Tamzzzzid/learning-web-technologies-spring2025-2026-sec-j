<?php 
$gender = $_POST['gender'] ?? '';

if(isset($_POST["submit"])){
    if($gender == ''){
        echo "No gender selected.";
    } else {
        echo "Selected Gender: {$gender}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gender Form</title>
</head>
<body>
    <fieldset style="width:25%">
        <legend>GENDER</legend>
        <form action="" method="post">
          <input type="radio" name="gender" value="Male"  > Male
          <input type="radio" name="gender" value="Female" > Female
          <input type="radio" name="gender" value="Other" > Other
          <hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>