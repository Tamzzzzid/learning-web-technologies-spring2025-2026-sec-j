<?php 
$degrees = $_POST['degrees'] ?? [];

if(isset($_POST["submit"])){
    if(empty($degrees)){
        echo "No degree selected.";
    } else {
        
        echo "Selected Degrees: " . implode(", ", $degrees);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Degree Form</title>
</head>
<body>
    <fieldset style="width:25%">
        <legend>DEGREE</legend>
        <form action="" method="post">
          <input type="checkbox" name="degrees[]" value="SSC" <?php if(in_array('SSC', $degrees)) echo 'checked'; ?>> SSC
          <input type="checkbox" name="degrees[]" value="HSC" <?php if(in_array('HSC', $degrees)) echo 'checked'; ?>> HSC
          <input type="checkbox" name="degrees[]" value="BSc" <?php if(in_array('BSc', $degrees)) echo 'checked'; ?>> BSc
          <input type="checkbox" name="degrees[]" value="MSc" <?php if(in_array('MSc', $degrees)) echo 'checked'; ?>> MSc
          <hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>