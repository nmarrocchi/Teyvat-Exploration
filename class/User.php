<?php

class User
{

    private $_username;
    private $_bdd;

    private $_character = null;

    private $_maxHealth;
    private $_currentHealth;
    private $_atk;
    private $_def;
    private $_mora;


    public function __construct($username)
    {
        $this->_username = $username;
    }

    // - Get User Pseudo
    public function GetUsername()
    {
        echo $this->_username;
    }
    

    // - Get User's Character Name Value
    public function GetCharacterValue()
    { $this->_character; }

    // - Get User's Character Name
    public function GetCharacter()
    { echo $this->_character; }

    // - Get User's Character Health
    public function GetCharacterHealth()
    { echo $this->_maxHealth; }

    // - Get User's Character MaxHealth
    public function GetCharacterMaxHealth()
    { echo $this->_maxHealth; }

    // - Get User's Character Attack
    public function GetCharacterAtk()
    { echo $this->_atk; }

    // - Get User's Character Defense
    public function GetCharacterDef()
    { echo $this->_def; }

    // - Set User's Character
    public function SetCharacter($stats,$character)
    {
        if(!isset($this->_character))
        {
            $this->_character = $character;
            $this->_maxHealth = $stats["Health"];
            $this->_currentHealth = $stats["Health"];
            $this->_atk = $stats["Attack"];
            $this->_def = $stats["Defense"];
        }
        else{}
    }

    // - Update Mora Amount
    public function UpdateMoraAmount($MoraAmount)
    {
        $this->_mora = $this->_mora + $MoraAmount;
    }

    /* - When User Is Damaged           Not In Use
    public function UserDamaged($enemy)
    {

    }

    */

}

?>

