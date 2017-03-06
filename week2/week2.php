<?php

//today's date
$today = date("d-m-Y H:i");

//date of one week ago
$oneWeek = time() - (7 * 24 * 60 * 60);
$lastWeek = date('d-m-Y H:i', $oneWeek) ."\n";


//How many days is between 5 feb and 13 august
$start = strtotime('2017-08-13');
$end = strtotime('2017-02-05');

$days_between = ceil(abs($end - $start) / 86400);

//days till my bday
$today1 = strtotime('today');
$bday_date = strtotime('2018-02-27');
$bday = ceil(abs($today1 - $bday_date) / 86400);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2.1</title>
</head>
<body>

<p>Vandaag: <?= $today ?></p>
<p>Datum van 1 week geleden: <?= $lastWeek ?></p>

<p>Difference between 5 february 2017 and 13 august 2017: <?= $days_between ?> days</p>

<p>My bday is next <?= $bday ?> days</p>


</body>
</html>