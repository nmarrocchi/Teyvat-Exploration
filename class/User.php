<?php

class User
{

    private $_username;
    private $_bdd;


    public function __construct($username)
    {
        $this->_username = $username;
    }

    public function GetUsername(){
        echo $this->_username;
    }

}

?>

