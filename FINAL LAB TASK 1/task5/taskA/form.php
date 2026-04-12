<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Degree Form</title>
</head>
<body>
    <fieldset style="width:25%">
        <legend>DEGREE</legend>
        <form action="val.php" method="post">
          <input type="checkbox" name="degrees[]" value="SSC" > SSC
          <input type="checkbox" name="degrees[]" value="HSC" > HSC
          <input type="checkbox" name="degrees[]" value="BSc" > BSc
          <input type="checkbox" name="degrees[]" value="MSc" > MSc
          <hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>