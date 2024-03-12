<?php
session_start(); // Start session at the beginning

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    require_once "connect_db.php";
    require_once "login_help.php";

    // Get username and password from POST data
    $username = $_POST['username'];
    $user_entered_password = $_POST['password'];

    // Prepare the SQL statement with a placeholder for the username
    list($check, $data) = validate($conn, $username, $user_entered_password);

    // Execute the prepared statement with the provided username
    if ($check) {
        // Access session.
        session_id("userSession");
        session_start();
        $_SESSION['username'] = $data['username'];

        // Redirect to the home page
        header('Location: ../html/home.php');
        exit(); // Make sure to exit after the header redirect
    } else {
        $errors = $data; // Or handle errors appropriately
    }

    // Close database connection
    pg_close($conn);
}
