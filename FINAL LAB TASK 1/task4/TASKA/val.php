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