<?php
include 'connection.php';

// Include the database connection file

// Query to retrieve data from the "restaurants" table
$sql = "SELECT RestaurantName, Address, Phonenumber, Meal, Review, Mustry FROM restaurants";

// Execute the query
$result = $mysqli->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
    echo '<div class="container my-5">';
    echo '<div class="row justify-content-center">';
    echo  '<div class="col-md-8 d-flex justify-content-center align-items-center">';
    echo '<div class="p-5 text-center bg-body-tertiary rounded-3 shadow">';
    
        echo '<p class="lead">';
            echo '<h1>' . $row['RestaurantName'] . '</h1><br>';
            echo '<strong>Address:</strong> ' . $row['Address'] . '<br>';
           echo '<strong>Phone Number:</strong> ' . $row['Phonenumber'] . '<br>';
          
            echo '<strong>Review:</strong> ' . $row['Review'] . '<br>';
            echo '<strong>Must Try:</strong> ' . $row['Mustry'] . '
        </p>';
    

    echo '</div>';
          echo  '</div>';
        echo '</div>';
   echo '</div>';
    }
} else {
    echo "No records found.";
}




// Close the database connection
$mysqli->close();
?>
