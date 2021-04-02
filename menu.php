<div id="PlayerStats" class="open">

    <img id="Genshin_Impact_Logo" src="img/Genshin_Impact_Logo.png" alt="Genshin_Impact_Logo">

   <?php 
        $logged = $User->GetLogged();
        if($logged == "1")
        {
            echo('
            <div id="Stats">
    
            <img src="img/Traveler.png" alt="Traveler_Icon" id="Traveler_Icon">
            <p id="Username">
            ');
            
            $User->GetUsername();
            
            echo('</p>
    
                <p class="Separator">----------------</p>

            <p id="Hp">HP : 50</p>
            <p id="Mp">MP : 40</p>
    
                <p class="Separator">----------------</p>
    
            <p>Level <span id="Level">11</span></p>
    
                <p class="Separator">----------------</p>
    
            <p id="Exp">Exp :  999 / 999 </p>
            
                <p class="Separator">----------------</p>
    
            <p id="Money"><img src="img/Primo-gems.png" alt="Coins">:  3858</p>
    
        </div>

        <div class="Account_menu">

       <input type="button" id="disconnect" value="Disconnect" onclick=""></a>
    
        </div>

        ');
        }
        else
        {
            echo('
                <div class="Account_menu">

                <a href="login.php"><input type="button" id="login" value="login"></a>
                <a href="register.php"><input type="button" id="register" value="register"></a>
            
                </div>
            ');
        }
    ?>



</div>


<input id="PlayerStatsButton" type="button" onclick="ChangeValuePSB('PlayerStatsButton')" value=">">
