<?php



use PHPUnit\Framework\TestCase;

class LoginService
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function handleLogin($username, $password)
    {
        $result = $this->db->execute($username);

        if (count($result) == 0) {
            return 'invalid username';
        }

        $storedPassword = $result[0]['password'];

        if (!password_verify($password, $storedPassword)) {
            return 'Incorrect password';
        }

        session_start();
        $_SESSION['username'] = $username;

        // Assuming you want to return something on successful login
        return 'Login successful';
    }
}





