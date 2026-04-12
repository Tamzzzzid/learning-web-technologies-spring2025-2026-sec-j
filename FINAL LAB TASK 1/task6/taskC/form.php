<?php 
$bg = $_POST['bg'] ?? '';

if(isset($_POST["submit"])){
    if($bg == ''){
        echo "No blood group selected.";
    } else {
        echo "Selected Blood Group: {$bg}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Group Form</title>
</head>
<body>
    <fieldset style="width:25%">
        <legend>BLOOD GROUP</legend>
        <form action="" method="post">
          <select name="bg">
              <option value=""></option>
              <option value="A+" <?php if($bg == 'A+') echo 'selected'; ?>>A+</option>
              <option value="B+" <?php if($bg == 'B+') echo 'selected'; ?>>B+</option>
              <option value="O+" <?php if($bg == 'O+') echo 'selected'; ?>>O+</option>
              <option value="AB+" <?php if($bg == 'AB+') echo 'selected'; ?>>AB+</option>
              <option value="A-" <?php if($bg == 'A-') echo 'selected'; ?>>A-</option>
              <option value="B-" <?php if($bg == 'B-') echo 'selected'; ?>>B-</option>
              <option value="O-" <?php if($bg == 'O-') echo 'selected'; ?>>O-</option>
              <option value="AB-" <?php if($bg == 'AB-') echo 'selected'; ?>>AB-</option>
          </select>
          <hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>