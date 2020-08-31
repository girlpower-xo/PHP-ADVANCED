<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="invoerformulier" action="advanced-2.php" method="post">
            <label for="tekstkleur">Tekstkleur</label>
            <select name="tekstkleur" id="tekstkleur">

                <?php
            $tekstKleuren = array("red", "blue", "green", "black", "brown");
            foreach($tekstKleuren as $tekstKleur) {
                ?>
            <option value="<?php echo $tekstKleur?>"><?php echo $tekstKleur ?></option>
            <?php
            }
            ?>
            </select><br>

            <label for="achtergrondkleur">Achtergrondkleur</label>
            <select name="achtergrondkleur" id="achtergrondkleur">

                <?php
            $achtergondKleuren = array("red", "blue", "green", "black", "brown");
            foreach( $achtergondKleuren as  $achtergondKleur) {
                ?>
            <option value="<?php echo  $achtergondKleur?>"><?php echo  $achtergondKleur ?></option>
            <?php
            }
            ?>
            </select><br>

            <label for="table-border">Table-border dikte</label>
            <select name="table-border" id="table-border">

                <?php
            $dikte = array("1px", "3px", "5px", "6px", );
            foreach($dikte as $dik) {
                ?>
            <option value="<?php echo $dik?>"><?php echo $dik ?></option>
            <?php
            }
            ?>
            </select><br>
          
            <label for="padding">padding</label>
            <select name="padding" id="padding">

                <?php
            $padding = array("1px", "3px", "5px", "6px", );
            foreach($padding as $pad) {
                ?>
            <option value="<?php echo $pad?>"><?php echo $pad ?></option>
            <?php
            }
            ?>
            </select><br>
            <input type="submit" name="submit" value="verstuur" />
        </form>
</body>
</html>