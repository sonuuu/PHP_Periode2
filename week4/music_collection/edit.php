<?php
//databases inladen
require_once "includes/database.php";
require_once "includes/image-helpers.php";

//isset posts controleren anders niks doen
if (isset($_POST['submit'])) {
    //Data laten zien, eerst wordt data opgehaald van de database
    $albumId = mysqli_escape_string($db, $_POST['id']);
    $artist = mysqli_escape_string($db, $_POST['artist']);
    $name = mysqli_escape_string($db, $_POST['name']);
    $genre = mysqli_escape_string($db, $_POST['genre']);
    $year = mysqli_escape_string($db, $_POST['year']);
    $tracks = mysqli_escape_string($db, $_POST['tracks']);
    $image = mysqli_escape_string($db, $_POST['current-image']);

    //formulier validatie controle
    require_once "includes/form-validation.php";

    //variabelen opslaan
    $album = [ 'artist' => $artist, 'name' => $name,
        'genre' => $genre,
        'year' => $year,
        'tracks' => $tracks,
        'image' => $image,
    ];

    if (empty($errors)) {
        //If image is not empty, process the new image file
        if ($_FILES['image']['error'] != 4) {
            //Remove old image
            deleteImageFile($image);

            //Store new image & retrieve name for database saving (override current image name)
            $image = 'images/' . addImageFile($_FILES['image']);
        }
        //Database updaten
        $query = "UPDATE albums
                  SET name = '$name', artist = '$artist', genre = '$genre', year = '$year', tracks = '$tracks', image = '$image'
                  WHERE id = '$albumId'";
        $result = mysqli_query($db, $query);

        if ($result) {
            //Set success message
            $success = true;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

    }
} else {
    //Datas laden uit database
    $albumId = $_GET['id'];

    //Get the record from the database result
    $query = "SELECT * FROM albums WHERE id = " . mysqli_escape_string($db, $albumId);
    $result = mysqli_query($db, $query);
    $album = mysqli_fetch_assoc($result);
}

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

<h1>Edit "<?= $album['artist'] . ' - ' . $album['name']; ?>"</h1>
<?php if (isset($errors) && !empty($errors)) { ?>
    <ul class="errors">
        <?php for ($i = 0; $i < count($errors); $i++) { ?>
            <li><?= $errors[$i]; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<?php if (isset($success)) { ?>
    <p class="success">Je album is bijgewerkt in de database</p>
<?php } ?>

<form action="<?= $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">

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

<a href="index.php">Go back to the list</a>

</body>
</html>
