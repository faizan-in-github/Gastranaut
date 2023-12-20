<?php

include 'connection.php';


$loginMessage = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $inputUsername = $_POST['username']; 
    $inputPassword = $_POST['password'];
   
    $sql = "SELECT * FROM users WHERE username = '$inputUsername' AND password = '$inputPassword'";

    $result = $mysqli->query($sql);

    
    if ($result && $result->num_rows > 0) {
        
        header("Location: Main.php");
        exit(); 
    } else {
        header("Location: login.php");
        $loginMessage = "Invalid login credentials.";
        echo "<script>document.getElementById('sms').innerHTML = '$loginMessage'</script>";
    }
}

$mysqli->close();

ob_end_flush(); 
?>
