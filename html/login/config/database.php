<?php
class Database {
    private $conn;

    public function __construct() {
        
        $envFile = '../.env';

        if (file_exists($envFile)) {
            $envVariables = parse_ini_file($envFile);
            
        } else {
            die('.env file not found.');
        }
        // Use environment variables for database connection
        $servername = $envVariables['DB_SERVERNAME'];
        $username = $envVariables['DB_USERNAME'];
        $password = $envVariables['DB_PASSWORD'];
        $dbname = $envVariables['DB_DBNAME'];

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
