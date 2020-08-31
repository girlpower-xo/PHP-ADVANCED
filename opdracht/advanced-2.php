<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: <?php echo $_POST["tekstkleur"];?>;
            background-color: <?php echo $_POST["achtergrondkleur"];?>;
        }
        td, th {
            border: <?php echo $_POST["table-border"] ?> solid black;
            padding: <?php echo $_POST["padding"] ?>;
        }
    </style>
</head>


<body>
    <table>
        <tr>
            <th>key</th>    
            <th>value</th>
        </tr>
        
        <?php
        function maakRij($jezelfs, $value){
            echo "
            <tr>
            <td>".$jezelfs . "</td>
            <td>".$value . "</td> 
            </tr>";
        }
        ?>
<?php
$jezelf = array("Naam"=>"Iris", "Leeftijd"=>"20", "Muzieksmaak"=>"HipHop", "Woonplaats" =>"Vinkeveen", );
foreach($jezelf as $jezelfs => $value) {
    maakRij($jezelfs, $value);
}
?>

</table>
</body>
</html>