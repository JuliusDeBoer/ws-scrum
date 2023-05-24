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

    //Return query result
    public function query($query)
    {
        return $this->db->query($query);
    }

    //Login user
    public function login($user,$pass)
    {
        $res = $query("SELECT * FROM users WHERE Password = \""$pass"\" AND FirstName = \""$user"\" ")
        if(mysql_num_rows($res) >= 0)
        {
            return new User($user,$pass)
        }
        return null
    }

}
?>