<?php

/**
 * Class Database
 */
class Database
{
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = 'root';
    private $conn;

    /**
     * DB Connect
     * @return null|PDO
     * @throws PDOException
     */
    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}