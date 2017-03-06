<?php

require_once "includes/music-data.php";

$music_nr = $_GET['album-number'];
$album = $music_collection[$music_nr];

?>

<!doctype html>
<html>
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<h1><?= $album['artist'] . " - " . $album['album']; ?></h1>


<ul>
    <li>Genre: <?= $album['genre']; ?></li>
    <li>Year: <?= $album['year']; ?></li>
    <li>Tracks: <?= $album['tracks']; ?></li>
</ul>

<a href="opdracht1_3.php">Go back to the list</a>

</body>
</html>
