<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        
        // Create connection
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            //echo "Connected successfully";
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    public function selectWithWhere($table, $columns = '*', $where = '') {
        $sql = "SELECT $columns FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }

    public function delete($table, $where = '') {
        $sql = "DELETE FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }
    
        $result = $this->conn->query($sql);
    
        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }
    
        return $result;
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_map([$this, 'quoteValue'], array_values($data)));
        
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->conn->query($sql) === true) {
            return $this->conn->insert_id;  // return the last inserted ID if needed
        } else {
            die("Insert query failed: " . $this->conn->error);
        }
    }

    public function update($table, $data, $where) {
        $set = [];
        foreach ($data as $column => $value) {
            $set[] = "$column = " . $this->quoteValue($value);
        }
        $set = implode(', ', $set);

        $sql = "UPDATE $table SET $set WHERE $where";

        if ($this->conn->query($sql) === true) {
            return true;
        } else {
            die("Update query failed: " . $this->conn->error);
        }
    }

    private function quoteValue($value) {
        return "'" . $this->conn->real_escape_string($value) . "'";
    }

    public function countRows($table, $where = '') {
        $sql = "SELECT COUNT(*) as count FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }

        $row = $result->fetch_assoc();
        return $row['count'];
    }

    public function search($table, $columns = '*', $conditions = []) {
        $sql = "SELECT $columns FROM $table";
        if (!empty($conditions)) {
            $clauses = [];
            foreach ($conditions as $column => $value) {
                $clauses[] = "$column LIKE " . $this->quoteValue('%' . $value . '%');
            }
            $sql .= " WHERE " . implode(' AND ', $clauses);
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Search query failed: " . $this->conn->error);
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }

    public function storeFile($table, $data, $fileColumn, $filePath) {
        $fileContent = file_get_contents($filePath);
        $mimeType = mime_content_type($filePath);  // Get MIME type of the file
        $data[$fileColumn] = base64_encode($fileContent);  // Store the file content as base64 encoded string
        $data['mimeType'] = $mimeType;  // Store MIME type
        return $this->insert($table, $data);
    }

    public function retrieveFile($table, $fileColumn, $where,$filename) {
        $result = $this->selectWithWhere($table, "$fileColumn, mimeType", $where);  // Fetch the file and MIME type
        if (!empty($result)) {
            $fileData = base64_decode($result[0][$fileColumn]);  // Decode the base64 encoded file content
            $mimeType = $result[0]['mimeType'];
            header('Content-Description: File Transfer');
            header("Content-Type: $mimeType");
            header('Content-Disposition: attachment; filename="'.$filename.'.' . $this->getExtension($mimeType) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            echo $fileData;
            return true;
        }
        return false;
    }

    private function getExtension($mimeType) {
        $mimeTypes = [
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'application/pdf' => 'pdf',
            // Add other MIME types and their extensions here
        ];

        return isset($mimeTypes[$mimeType]) ? $mimeTypes[$mimeType] : 'bin';
    }

}

// Usage example
$db = new Database('localhost', 'root', '', 'skcs');

// Store file example
//$db->storeFile('your_table_name', ['other_column' => 'value'], 'file_column', '/path/to/your/file.jpg');

// Retrieve file example
//$db->retrieveFile('your_table_name', 'file_column', 'id=1', '/path/to/output/file.jpg');

//$db->closeConnection();
?>
