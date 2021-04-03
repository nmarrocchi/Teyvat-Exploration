<?php
    session_start();
    require 'functions.php';
    require 'class/User.php';
    CheckUserCanAccess();
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
        $AnemoResult = $bdd->query("SELECT * FROM Characters WHERE Element='Anemo' OR Element='Multi'");
        $PyroResult = $bdd->query("SELECT * FROM Characters WHERE Element='Pyro'");
        $ElectroResult = $bdd->query("SELECT * FROM Characters WHERE Element='Electro'");
        $CryoResult = $bdd->query("SELECT * FROM Characters WHERE Element='Cryo'");
        $GeoResult = $bdd->query("SELECT * FROM Characters WHERE Element='Geo' OR Element='Multi'");
        $HydroResult = $bdd->query("SELECT * FROM Characters WHERE Element='Hydro'");
    ?>

    <div id="content">
        <h1>Teyvat Exploration Battle Preparation</h1>

        <h2><u>Choose a character :</u></h2>

        <?php 
            $AnemoChar = $bdd->query("SELECT * FROM characters WHERE Element='Anemo' ORDER BY Name Asc");
            $PyroChar = $bdd->query("SELECT * FROM characters WHERE Element='Pyro' ORDER BY Name Asc");
        ?>            

<!---------------------------------->
<?php
    for($i=0 ; $i<6 ; $i++)
    {
        $ElementType = ["Anemo","Pyro","Electro","Cryo","Geo","Hydro"];
        $CharElementRequest = $bdd->query("SELECT * FROM characters WHERE Element='$ElementType[$i]' ORDER BY Name Asc");
    ?>

            <div id="<?php echo $ElementType[$i]?>_Characters">
			<h3></h3>

            <div class="Elements_Infos">
                <div class="Element">
                    <img class="Element_icon" src="img/elements/<?php echo $ElementType[$i]?>.png" alt="<?php echo $ElementType[$i]?>"><h3>Anémo</h3>
                </div>
                <div class="Element_Characters">
                    <table>
                        <tr>
                            <?php while($CharRequest = $CharElementRequest->fetch()){
                                echo'
                                    <td>
                                        <img class="Character" name="'.$CharRequest["Name"].'" src="img/characters/'.$CharRequest["Name"].'" alt="'.$CharRequest["Name"].'" onclick="ChangeText(this.name);">
                                    </td>
                                ';
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
            
		</div>
        <?php
    }
?>
<!---------------------------------->


            <input type="button" id="ChooseButton" onclick="GoToBattle(this.value)" value="Go to battle">
        </div>
    
    <?php include 'footer.php' ?>
</body>
</html>

<!--
<php
            $Result = $bdd->query("SELECT * FROM Characters "); 

            while($tab=$Result->fetch()){
                ?>

                <input type="button" name="<php echo $tab['Name'] ?>" id="b_<php echo $tab['ID'] ?>" onclick="ChangeText(this.name);" style="background-image: url('img/characters/<php echo $tab['Name'] ?>.png');"/>

                <php
            }
            ?>
            -->