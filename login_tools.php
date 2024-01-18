<?php
# LOGIN HELPER FUNCTIONS.
# Function to load specified or default URL.
function load($page = 'login.php')
{
    # Begin URL with protocol, domain, and current directory.
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    # Remove trailing slashes then append page name to URL.
    $url = rtrim($url, '/\\');
    $url .= '/' . $page;
    # Execute redirect then quit.
    header("Location: $url");
    exit();
}

# Function to check email address and password.
function validate($conn, $email = '', $pwd = '')
{
    # Initialize errors array.
    $errors = array();
    # Check email field.
    if (empty($email)) {
        $errors[] = 'Enter your email address.';
    } else {
        $e = pg_escape_string($conn, trim($email));
    }
    # Check password field.
    if (empty($pwd)) {
        $errors[] = 'Enter your password.';
    } else {
        $p = pg_escape_string($conn, trim($pwd));
    }
    # On success, retrieve user_id, first_name, and last name from 'users' database.
    if (empty($errors)) {
        $q = "SELECT user_id, first_name, last_name FROM users WHERE email='$e' AND
              pass=SHA256('$p')";
        $r = pg_query($conn, $q);
        if (@pg_num_rows($r) == 1) {
            $row = pg_fetch_array($r, NULL, PGSQL_ASSOC);
            return array(true, $row);
        }
        # Or on failure, set error message.
        else {
            $errors[] = 'Email address and password not found.';
        }
    }
    # On failure, retrieve error message/s.
    return array(false, $errors);
}
