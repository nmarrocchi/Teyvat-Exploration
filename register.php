<?php
    session_start();
    require "functions.php";


    if (isset($_POST['r_submit']))
    {
        $User->Login($_POST['r_username'] , $_POST['r_password']);
    }
    else
    {
        echo ' <script>console.log("Not Set")</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/Klee_Icon.png">
        <link type="text/css" rel="stylesheet" href="style/style.css">
        <link type="text/css" rel="stylesheet" href="style/playerStats.css">
        <link type="text/css" rel="stylesheet" href="style/register.css">
        <script type="text/javascript" src="functions.js"></script>
        <title>Teyvat Exploration - register</title>
    </head>

    <body>

    <?php include "menu.php" ?>

    <div class="content">

        <?php $User->GetRegisterForm(); ?>

    </div>

    </body>

</html>