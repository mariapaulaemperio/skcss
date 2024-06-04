<?php
class Database {
    private $host = "localhost";
    private $db_name = "skcss";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);

        foreach ($data as $key => &$value) {
            $stmt->bindParam(':' . $key, $value);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function authenticate($table,$email, $password) {
        $sql = "SELECT * FROM $table WHERE email = :email"; // Adjust table/column names as needed
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) { // Use password_verify() for secure hashing
          return true; // Authentication successful
        } else {
          return false; // Authentication failed
        }
      }
}
?>
