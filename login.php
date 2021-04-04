<?php
    session_start();
    require 'functions.php';
    require 'class/User.php';
    CheckIfLog(basename(__FILE__));
    
    $LoginError = " Please Login You Here :";

    if(isset($_POST['L_Submit']))
    {
        $CheckUsers = $bdd->query("SELECT COUNT(*) FROM users WHERE Username = '".$_POST['L_Username']."' AND Password = '".$_POST['L_Password']."'");
        $CountExistUser = $CheckUsers->fetch();
        
        if($CountExistUser['COUNT(*)'] > 0)
        {
            $_SESSION['UserInfos'] = array($_POST['L_Username']);
            $LoginError = 'You successfully connected ! You can go to the battle';
            $_SESSION['Logged'] = 1;
            header('location: index.php');
        }
        else
        {
            $LoginError = "Username or password are wrong";
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
    <title>Teyvat Exploration - Login</title>
</head>
<body>

    <?php 
        require "menu.php";
    ?>

    <div id="content">
        
        <form class="Login_Form" method="POST" href="">

            <p id="LoginError"><?php echo $LoginError ?></p>

            <input type="text" id="L_Username" name="L_Username" placeholder="Enter your username" required>
            <input type="password" id="L_Password" name="L_Password" placeholder="Enter your password" required>

            <input type="submit" id="L_Submit" name="L_Submit" value="Login">


        </form>

    </div>
    
    <?php include 'footer.php' ?>
</body>
</html>