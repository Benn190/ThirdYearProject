<?php

class DatabaseIntegrationTest extends PHPUnit\Framework\TestCase
{
    public function testDatabaseConnection()
    {
        $host = "kandula.db.elephantsql.com";
        $port = "5432";
        $dbname = "vfqjpwel";
        $user = "vfqjpwel";
        $password = "cFs0XFyubfNelPRIoab5EJcJX6XGA1Y5";

        $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

        $this->assertNotFalse($conn, 'Failed to connect to the database');
    }
}
