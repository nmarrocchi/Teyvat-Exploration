<?php
    session_start();
    require 'functions.php';
    require 'class/User.php';
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
    <title>Teyvat Exploration - Choose</title>
</head>
<body>

    <?php 
        require "menu.php";
    ?>

    <div id="content">
        <h1>Teyvat Exploration Battle Preparation</h1>

        <h2><u>Choose a character :</u></h2>

        <?php
            $Result = $bdd->query("SELECT * FROM Characters "); 

            while($tab=$Result->fetch()){
                ?>

                <input type="button" name="<?php echo $tab['Name'] ?>" id="b_<?php echo $tab['ID'] ?>" onclick="ChangeText(this.name);" style="background-image: url('img/characters/<?php echo $tab['Name'] ?>.png');"/>

                <?php
            }
            ?>
            <input type="button" id="ChooseButton" onclick="GoToBattle(this.value)" value="Go to battle">

    </div>
    
    <?php include 'footer.php' ?>
</body>
</html>