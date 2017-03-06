<?php
    if (isset($_POST['submit']))
    {
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $genre = $_POST['genre'];
        $year  = $_POST['year'];
        $tracks = $_POST['tracks'];


    //errors: foutmelding wanneer het veld leeg is of verkeerd ingevuld word.
    $errors = [];
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
}
?>

<!doctype html>
<html>
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<h1>Create album</h1>
<?php if (isset($errors)) { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
<?php } ?>


<form action="save.php" method="post">

    Artist:<br>
    <input type="text" name="artist" value="<?= (isset($artist) ? $artist : ''); ?>">
    <br>
    Album:<br>
    <input type="text" name="album" value="<?= (isset($album) ? $album : ''); ?>">
    <br>
    Year:<br>
    <input type="text" name="year" value="<?= (isset($year) ? $year : ''); ?>">
    <br>
    Tracks:<br>
    <input type="text" name="tracks" value="<?= (isset($tracks) ? $tracks : ''); ?>">
    <br>
    Genre:<br>
    <input type="text" name="genre" value="<?= (isset($genre) ? $genre : ''); ?>">
    <br>

    <input type="submit" value="Save">
</form>

<a href="opdracht1_3.php">Go back to the list</a>

</body>
</html>
