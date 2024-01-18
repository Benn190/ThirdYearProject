<?php
# PROCESS LOGIN ATTEMPT.
# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # Open database connection.
    require('connect_db.php');
    # Get connection, load, and validate functions.
    require('login_tools.php');

    # Check login.
    list($check, $data) = validate($conn, $_POST['email'], $_POST['pass']);

    # On success set session data and display the logged-in page.
    if ($check) {
        # Access session.
        session_start();
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        load('home.html');
    } else {
        # On failure set errors.
        $errors = $data;
    }

    # Close database connection.
    pg_close($conn);
}

# Continue to display the login page on failure.
include('login.php');
?>
