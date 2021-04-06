<?php
    session_start();
    require 'functions.php';
    require 'class/User.php';
    CheckUserCanAccess();
    $character = $bdd->query("SELECT * FROM characters WHERE Name = '".$_GET["character"]."'");
    $stats = $character->fetch();
    $_SESSION['User']->SetCharacter($stats,$_GET['character']);

    $enemys = array('Arbalétrier Brutocollinus','Brutoshaman Anémo','Mage Électroluciole');
    $i = rand(0,2);
    
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
    <link rel="stylesheet" href="style/characters.css">
    <link rel="stylesheet" href="style/battle.css">
    <title>Teyvat Exploration - Battle</title>
</head>
<body>

    <?php 
        require "menu.php";
    ?>

    <div id="content">
        <h1>Teyvat Exploration Battle Phase</h1>

        <div id="Battle">
            Enemy : <?php echo $enemys[$i] ?>
            <img id="Enemy" src="img/enemys/<?php echo $enemys[$i] ?>.png" alt="<?php echo $enemys[$i] ?>">
        </div>

    </div>

    <?php include 'footer.php' ?>
</body>
</html>