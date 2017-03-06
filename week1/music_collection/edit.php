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


<form action="save.php" method="post">

    Artist:<br>
    <input type="text" name="artist" value="<?= $album['artist'] ?>">
    <br>
    Album:<br>
    <input type="text" name="album" value="<?= $album['album'] ?>">
    <br>
    Year:<br>
    <input type="text" name="year" value="<?= $album['year'] ?>">
    <br>
    Tracks:<br>
    <input type="text" name="tracks" value="<?= $album['tracks'] ?>">
    <br>
    Genre:<br>
    <input type="text" name="genre" value="<?= $album['genre'] ?>">
    <br>

    <input type="submit" value="Save">
</form>

<a href="opdracht1_3.php">Go back to the list</a>

</body>
</html>
