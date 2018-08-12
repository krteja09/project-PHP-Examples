<?php

/**
 * Class Category
 */
class Category
{
    // DB Stuff
    private $conn;
    private $table = 'categories';

    // Properties
    public $id;
    public $name;
    public $created_at;

    /**
     * Constructor with DB
     * Category constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->conn = $db;
    }

    /**
     * Get categories
     * @return mixed
     */
    public function read()
    {
        // Create query
        $query = 'SELECT 
        id,
        name,
        created_at
      FROM
        ' . $this->table . '
      ORDER BY
        created_at DESC';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }
}