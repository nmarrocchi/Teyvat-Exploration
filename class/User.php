<?php

class User
{

    private $_username;


    public function __construct($username)
    {
        $this->_username = $username;
    }

    public function GetUsername(){
        echo $this->_username;
    }

}

?>

