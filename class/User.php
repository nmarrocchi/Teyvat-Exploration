<?php

class User
{

    private $_username;
    private $_bdd;


    public function __construct($username,$bdd)
    {
        $this->_username = $username;
        $this->_bdd = $bdd;
    }

    public function GetUsername(){
        echo $this->_username;
    }

}

?>

