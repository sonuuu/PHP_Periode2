<?php
//Formulier gegevens updaten
$music_nr = $_POST['music_nr'];
$artist = $_POST['artist'];
$album = $_POST['album'];
$genre = $_POST['genre'];
$year = $_POST['year'];
$tracks = $_POST['tracks'];

//check of data valid is en generate error als t niet zo is
$errors = [];

//artist vakje, als t leeg is en komt er een foutmelding: artist cannot be empty
if ($artist == "") {
    $errors[] = 'Artist cannot be empty';
}
if ($album == "") {
    $errors[] = 'Album cannot be empty';
}
if ($genre == "") {
    $errors[] = 'Genre cannot be empty';
}
if ($year == "") {
    $errors[] = 'Year cannot be empty';
}
if (!is_numeric($year) || strlen($year) != 4) {
    $errors[] = 'Year needs to be a number with the length of 4';
}
if ($tracks == "") {
    $errors[] = 'Tracks cannot be empty';
}
if (!is_numeric($tracks)) {
    $errors[] = 'Tracks need to be a number';
}

?>

<!doctype html>
<html>
<head>
    <title>Music Collection Save</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<?php if (empty($errors)) { ?>
    <h1>Posted data:</h1>
    <ul>
        <li>Artist: <?= $artist; ?></li>
        <li>Album: <?= $album; ?></li>
        <li>Genre: <?= $genre; ?></li>
        <li>Year: <?= $year; ?></li>
        <li>Tracks: <?= $tracks; ?></li>
    </ul>


<?php } else { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
    <a href="edit.php?album-number=<?= $music_nr; ?>">Go back &amp; try again!</a>
<?php } ?>

<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
