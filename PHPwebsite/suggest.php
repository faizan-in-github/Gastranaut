<?php
include 'connection.php';
include 'suggestion.php';
$registrationMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputRestaurantName = $_POST['restaurant_name'];
    $inputAddress = $_POST['address'];
    $inputPhonenumber = $_POST['phone'];
    $inputMeal = $_POST['meal'];
    $inputReview = $_POST['review'];
    $inputMustry = $_POST['mustry'];

    $checkRestaurantQuery = "SELECT * FROM restaurants WHERE RestaurantName = '$inputRestaurantName' AND Mustry = '$inputMustry'";

    $checkRestaurantResult = $mysqli->query($checkRestaurantQuery);

    if ($checkRestaurantResult) {
        if ($checkRestaurantResult->num_rows > 0) {
            $registrationMessage = "Restaurant with this name already exists. Please choose a different name.";
        } else {
            
            $insertRestaurantQuery = "INSERT INTO restaurants (RestaurantName, Address, Phonenumber, Meal, Review, Mustry) VALUES ('$inputRestaurantName', '$inputAddress', '$inputPhonenumber', '$inputMeal', '$inputReview', '$inputMustry')";
            
            if ($mysqli->query($insertRestaurantQuery) === TRUE) {
                $registrationMessage = "Restaurant information added successfully!";
            } else {
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
