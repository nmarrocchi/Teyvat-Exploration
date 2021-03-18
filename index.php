<?php
    session_start();
    if(!isset($_SESSION['logged'])){
        $_SESSION['logged'] = 0;
    }
    else{
    
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/Klee_Icon.png">
        <link type="text/css" rel="stylesheet" href="style/style.css">
        <link type="text/css" rel="stylesheet" href="style/playerStats.css">
        <script type="text/javascript" src="functions.js"></script>
        <title>Teyvat Exploration - Home</title>
    </head>

    <body>

    <?php include "menu.php" ?>

    <?php echo $_SESSION['logged'] ?>

    </body>

</html>