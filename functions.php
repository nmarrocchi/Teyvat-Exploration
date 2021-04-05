
<?php

$bdd = new PDO("mysql:host=mysql-teyvat-exploration.alwaysdata.net;dbname=teyvat-exploration_teyvat-exploration","231361","0ver_Draw070902");


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
    {
        $_SESSION['User'] = new User($_SESSION['UserInfos'][0]);
    }
}
}


// - Create User
function CreateUser($Username,$bdd){
    $_SESSION['User'] = new User($Username);
}

?>