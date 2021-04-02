<?php
    session_start();
    require 'functions.php';
    CheckIfLog(basename(__FILE__));

    $RegisterError = " Please Register You Here :";

    if(isset($_POST['R_Submit']))
    {
        $CheckUsers = $bdd->query("SELECT COUNT(*) FROM users WHERE Username = '".$_POST['R_Username']."' ");
        print_r("SELECT COUNT(*) FROM Users WHERE Username = '".$_POST['R_Username']."' ");
        $CountExistUser = $CheckUsers->fetch();
        
        if($CountExistUser['COUNT(*)'] > 0)
        {
            $RegisterError = 'This username is already taken';
        }
        else
        {
            $bdd->query("INSERT INTO users (`Username`, `Password`) VALUES ('".$_POST['R_Username']."','".$_POST['R_Password']."')");
            $RegisterError = "Account Created, please login";
        }
    }
    else
    {}

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
    <title>Teyvat Exploration - Register</title>
</head>
<body>

    <?php 
        require "menu.php";
    ?>

    <div id="content">

        <form class="Register_Form" method="POST" href="">

            <p id="RegisterError"><?php echo $RegisterError ?></p>

            <input type="text" id="R_Username" name="R_Username" placeholder="Enter your username (max 20 characters)" maxlength="20" required>
            <input type="password" id="R_Password" name="R_Password" placeholder="Enter your password (max 20 characters)" maxlength="20" required>

            <input type="submit" id="R_Submit" name="R_Submit" value="Register">

        </form>

    </div>
    
    <?php include 'footer.php' ?>
</body>
</html>