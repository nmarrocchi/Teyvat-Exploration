<?php 
    require "class/User.php";


    // - Gestion bdd
    $bdd = null;
    $errorMessage="";

    try{
            $user = "root";
            $pass = "root";
            $bdd = new PDO('mysql:host=192.168.65.60;dbname=Teyvat_Exploration', $user, $pass);
            
    }catch(Exception $e){
        $errorMessage .= $e->getMessage();
    }

    if(!isset($User))
    {
        $User = new User($bdd,0);
    }
    else{}


?>