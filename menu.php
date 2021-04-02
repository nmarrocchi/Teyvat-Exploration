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
        $_SESSION['User'] = new User($_SESSION['UserInfos'][0]);
        ?>

        <div id="User_Infos">
            <p id="User_Username"><?php $_SESSION['User']->GetUsername()?></p>

            <hr>
        </div>

        <div id="menu_button">

            <li onclick="window.location.href = 'disconnect.php'" >Disconnect</li>

        </div>  
        
        <?php
        }
    ?>

</div>