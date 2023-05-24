<?php
class User
{
    //Variables
    private $user;
    private $pass;
    private $admin = false;

    //Define variables
    public function __construct($user,$pass)
    {
        $this->user = $user;
        $this->pass = $pass;
    }

    //Getters
    private function getPass()
    {
        return $this->pass;
    }
    private function getUser()
    {
        return $this->user;
    }
}
?>