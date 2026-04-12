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

