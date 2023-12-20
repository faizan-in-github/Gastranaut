<?php
include 'connection.php';


$registrationMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];
    $inputName = $_POST['name'];
    $inputPhonenumber = $_POST['phone'];

    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$inputUsername'";
    $checkUsernameResult = $mysqli->query($checkUsernameQuery);

    if ($checkUsernameResult) {
        if ($checkUsernameResult->num_rows > 0) {
            include 'signup.php';
            $registrationMessage = "Username already exists. Please choose a different one.";
        } else {
            $insertUserQuery = "INSERT INTO users (Name, Phonenumber, username, password) VALUES ('$inputName', '$inputPhonenumber', '$inputUsername', '$inputPassword')";
            if ($mysqli->query($insertUserQuery) === TRUE) {
                header("Location: Main.php");
                $registrationMessage = "Registration successful!";
            } else {
                include 'signup.php';
                $registrationMessage = "Error: " . $mysqli->error;
            }
        }
    } else {
        $registrationMessage = "Error executing the query: " . $mysqli->error;
    }

    echo "<script>document.getElementById('sms').innerHTML = '$registrationMessage'</script>";
}

$mysqli->close();
?>
