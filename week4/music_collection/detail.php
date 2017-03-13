<?php
//Require database in this file
require_once "includes/database.php";

//Retrieve the GET parameter from the 'Super global'
$albumId = $_GET['id'];

//Get the record from the database result
$query = "SELECT * FROM albums WHERE id = " . mysqli_escape_string($db, $albumId);
$result = mysqli_query($db, $query);
$album = mysqli_fetch_assoc($result);

//Close connection
mysqli_close($db);
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

<a href="index.php">Go back to the list</a>

</body>
</html>
