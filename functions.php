
<?php

$bdd = new PDO("mysql:host=192.168.65.60;dbname=Teyvat_Exploration","root","root");


// - Redirect to index.php if User is logged
function CheckIfLog($path)
{
    if(!isset($_SESSION['Logged']))
    {
        $_SESSION['Logged'] = 0;
        CheckIfLog();
    }
    else
    {
        if($_SESSION['Logged'] == 0)
        {}
        else
        {
            if($path !== 'index.php')
            {
                header('location: index.php');
            }
        }
    }
}


// - If $_SESSION['Logged'] = 0, redirect to index.php
function CheckUserCanAccess()
{
if(!isset($_SESSION['Logged']))
{
    $_SESSION['Logged'] = 0;
    header('location: index.php');
}
else
{
    if($_SESSION['Logged'] == 0)
    {
        header('location: index.php');
    }
    else
    {}
}
}


// - Create User
function CreateUser($Username,$bdd){
    $_SESSION['User'] = new User($Username);
}

?>