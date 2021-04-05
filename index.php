<?php
    session_start();
    require 'functions.php';
    require 'class/User.php';
    if(!isset($_SESSION['Logged']))
    {
        $_SESSION['Logged'] = 0;
    }
    else if($_SESSION['Logged'] == 1)
    {
        header('Location: choose.php');
    }
    else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="functions.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/menu.css">
    <title>Teyvat Exploration - Home</title>
</head>
<body>

    <?php 
        require "menu.php";
    ?>

    <div id="content">
        <h1> Welcome to Teyvat Exploration !</h1>
        <p>--------------------</p>

        <h2>
            <p>In this game, you can choose one of the many characters</p>
            <p>that you can play in Genshin Impact</p>
            <p>and you can fight with him.</p>
            <p>If you would like to join us, first please create an account and login</p>
        </h2>

        <img id="WELCOME" src="img/WELCOME.png" alt="WELCOME">

        <?php
            if($_SESSION['Logged'] == 1)
            {
        ?>
            <input type="button" id="Battle_button" onclick="window.location.href = 'choose.php'" value="Go to choose">
        <?php
            }
            else{}
        ?>
    </div>
    
    <?php include 'footer.php' ?>
</body>
</html>