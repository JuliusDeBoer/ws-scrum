<?php
class User
{
    //Variables
    public $user;
    public $pass;
    private $admin = false;

    //Define variables
    public function __construct($user,$pass)
    {
        $this->user = $user;
        $this->pass = $pass;
    }
}
?>