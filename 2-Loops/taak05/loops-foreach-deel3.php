<?php


$student  = array(
    "voornaam"      => "Jan",
    "achternaam"    => "Janssen",
    "klas"          => "9A",
    "Leeftijd"      => 17,
    "Woonplaats"    => "Amstelveen"

);



?>

<table>
    <thead>
        <tr>
            <th>gegeven</th>
            <th>waarde</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($student as $key => $value) { ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</html>