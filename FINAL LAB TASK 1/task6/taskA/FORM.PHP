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
        <form action="val.php" method="post">
          <select name="bg">
              <option value=""></option>
              <option value="A+" >A+</option>
              <option value="B+" >B+</option>
              <option value="O+" >O+</option>
              <option value="AB+" >AB+</option>
              <option value="A-" >A-</option>
              <option value="B-" >B-</option>
              <option value="O-" >O-</option>
              <option value="AB-" >AB-</option>
          </select>
          <hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html>