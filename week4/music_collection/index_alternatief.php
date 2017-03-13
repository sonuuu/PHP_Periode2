<?php
//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM albums";
$result = mysqli_query($db, $query);

//Loop through the result to create a custom array
$musicAlbums = [];
while ($row = mysqli_fetch_assoc($result)) {
    $musicAlbums[] = $row;
}

//Close connection
mysqli_close($db);


// Een array uitlezen
// print_r($array);
// Een array uitlezen
// var_dump($array);

?>
<!doctype html>
<html>
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body id="alternative">
<div id="container">
    <h1>Music collection full of awesomeness!</h1>

    <div class="intro-links">
        <a href="create.php">Create new album</a>

        <a href="index.php">Standard page</a>
    </div>

    <div class="albums">
        <?php foreach ($musicAlbums as $musicAlbum) { ?>
            <div class="album">
                <div class="cover">
                    <a href="detail.php?id=<?= $musicAlbum['id']; ?>">
                        <img src="<?= $musicAlbum['image']; ?>" alt="<?= $musicAlbum['name']; ?>"/>
                    </a>
                </div>
                <div class="links">
                    <a class="detail" href="detail.php?id=<?= $musicAlbum['id']; ?>"><?= $musicAlbum['artist'] . " - " . $musicAlbum['name']; ?></a>
                    <a class="edit" href="edit.php?id=<?= $musicAlbum['id']; ?>">Edit</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
