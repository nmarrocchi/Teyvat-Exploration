<input type="button" id="show_hide_menu" onclick="ShowAndHideMenu(this.id,this.value)" value=">">

<div id="menu">

    <?php
        if($_SESSION['Logged'] == 0)
        {
    ?>

    <div id="menu_button">

        <li onclick="window.location.href = 'login.php'" >Login</li>
        <li onclick="window.location.href = 'register.php'" >Register</li>

    </div>

    <?php
        }
        else
        {
        ?>

        <div id="User_Infos">
            <p id="User_Username"><?php $_SESSION['User']->GetUsername()?></p>
            <hr>
            
                        <div id="Character_Infos">
                            <img id="User_character_pic" src="img/characters/<?php $_SESSION['User']->GetCharacter()?>.png" alt="Character">
                            <p id="User_character"><?php $_SESSION["User"]->GetCharacter()?></p>
                            <p id="User_character_Health">HP : <?php $_SESSION['User']->GetCharacterHealth()?> / <?php $_SESSION['User']->GetCharacterMaxHealth()?></p>
                            <p id="User_character_Attack">Atk : <?php $_SESSION['User']->GetCharacterAtk()?></p>
                            <p id="User_character_Defense">Def : <?php $_SESSION['User']->GetCharacterDef()?></p>
                        </div>

            <hr>
            <p id="change_character_button" onclick="window.location='choose.php'">Change</p>
        </div>

        <div id="menu_button">

            <li onclick="window.location.href = 'disconnect.php'" >Disconnect</li>

        </div>  
        
        <?php
        }
    ?>

</div>