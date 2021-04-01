<?php
    session_start();
    require "functions.php";


    if (isset($_POST['l_submit']))
    {
        $User->Login($_POST['l_username'] , $_POST['l_password']);
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
        <link type="text/css" rel="stylesheet" href="style/login.css">
        <script type="text/javascript" src="functions.js"></script>
        <title>Teyvat Exploration - login</title>
    </head>

    <body>

    <?php include "menu.php" ?>

    <div class="content">

        <?php $User->GetLoginForm(); ?>

    </div>

    </body>

</html>