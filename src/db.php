<?php
class DB
{
    //Variables
    private $db;

    //Connect to database
    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    //return query result
    public function query($query)
    {
        return $this->database->query($query);
    }

}
?>