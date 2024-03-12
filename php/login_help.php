<?php 
function validate($conn, $username = '', $pwd = '')
{
    $errors = array();

    if (empty($username)) {
        $errors[] = 'Enter your email address.';
    } else {
        $e = pg_escape_string($conn, trim($username));
    }

    if (empty($pwd)) {
        $errors[] = 'Enter your password.';
    } else {
        $p = pg_escape_string($conn, trim($pwd));
    }

    if (empty($errors)) {
        // Prepare and execute a parameterized query to fetch the hashed password
        $stmt = pg_prepare($conn, "fetch_user", "SELECT username, password FROM accounts WHERE username = $1");
        $result = pg_execute($conn, "fetch_user", array($e));

        if ($result && pg_num_rows($result) == 1) {
            $row = pg_fetch_assoc($result);
            $storedPwdHash = $row['password'];

            // Verify the entered password against the stored hashed password
            if (password_verify($p, $storedPwdHash)) {
                unset($row['password']); // Remove the password from the returned data
                return array(true, $row);
            } else {
                $errors[] = 'Incorrect password.';
            }
        } else {
            $errors[] = 'Username not found.';
        }
    }

    return array(false, $errors);
}
?>
