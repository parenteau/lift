<?php
    // Establish database connection
    $connection = mysqli_connect("localhost", "username", "password", "weightlifting_db");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve exercise data from the form
        $exerciseName = $_POST["exercise_name"];

        // Insert exercise data into the exercise table
        $query = "INSERT INTO exercises (exercise_name) VALUES ('$exerciseName')";
        $result = mysqli_query($connection, $query);
        if ($result) {
            echo "Exercise added successfully.";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        // Close database connection
        mysqli_close($connection);
    }
?>
