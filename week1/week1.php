<?php

//Opdracht 1
//j = dag, F = maand in tekst, Y = jaar
//m = dag (als in 01), d = maand in getal
//H = hour, i = minuten en \ is om letter weer te geven zoals \e\n\ wordt als en weergegeven.
//G = hour

date_default_timezone_set('Europe/Amsterdam');

$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Goedemorgen";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Goede middag";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Goedenavond";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1.1</title>
</head>
<body>
<h4>Opdracht 1</h4>

<p>Het is vandaag <?php echo date('j F Y') ?></p>
<p>Het is vandaag <?php echo date('m/d/Y'); ?></p>
<p>Het is nu <?php echo date('G \u\u\r\ \e\n\ i \m\i\n\u\t\e\n')?></p>


<h4>Opdracht 2</h4>




</body>
</html>