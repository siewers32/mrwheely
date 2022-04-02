<?php
include("lib/Auto.php");
include("lib/AutoOverzicht.php");

$ao = new AutoOverzicht();
$ao->add(new Auto("BMW", "318i", 45677, "blauw"));
$ao->add(new Auto("Audi", "R8", 34566, kleur: "bruin"));
$ao->add(new Auto("Audi", "A3", 7888, kleur: "groen"));
$ao->add(new Auto("Audi", "A1", 12355, kleur: "blauw"));
$ao->add(new Auto("Ferrari", "GTS", 102435, kleur: "rood"));
$ao->add(new Auto("Ferrari", "Enzo", 98955, kleur: "rood"));
$ao->add(new Auto("Ferrari", "Testarossa", 133299, kleur: "rood"));
$ao->add(new Auto("Fiat", "500", 11288, kleur: "wit"));
$ao->add(new Auto("Fiat", "Punto", 12388, kleur: "blauw"));
$ao->add(new Auto("Ford", "Fiesta", 7888, kleur: "wit"));
$ao->add(new Auto("Ford", "focus", 34566, kleur: "wit"));

if(isset($_POST['submit'])) {
    $autos = $ao->filterByMerk($_POST['merk']);
} else {
    $autos = $ao->autos;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="post">
    <select name="merk">
        <option value="alle">Alle</option>
        <?php foreach($ao->getMerken() as $merk) { ?>
        <option><?= $merk ?></option>
        <?php } ?>
    </select>
    <input type="submit" name="submit">
</form>
<table>
    <?php foreach($autos as $auto) { ?>
    <tr>
        <td><?= $auto->merk ?></td>
        <td><?= $auto->type ?></td>
        <td><?= $auto->kleur ?></td>
        <td><?= $auto->prijs ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>

