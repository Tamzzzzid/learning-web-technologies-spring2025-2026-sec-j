<?php 
$bg = $_POST['bg'] ?? '';

if(isset($_POST["submit"])){
    if($bg == ''){
        echo "No blood group selected.";
    } else {
        echo "Selected Blood Group: {$bg}";
    }
}
