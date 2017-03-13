<?php

require_once "includes/database.php";

if(isset($_POST['submit'])){
    $albumValues = $_POST;

    $query = "INSERT INTO `albums`(`artist`, `genre`, `tracks`, `year`, `album`,) 
    VALUES (".$albumValues['artist'].", ".$albumValues['genre'].", ".$albumValues['tracks'].",".$albumValues['year'].", ".$albumValues['album'].")";

mysqli_query($db, $query);


}





?>


<!doctype html>
<html>
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Create album</h1>

<!-- enctype="multipart/form-data" no characters will be converted -->

<form method="POST" action="<? $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

    <div class="data-field">
        <label for="artist">Artist</label>
        <input id="artist" type="text" name="artist" value=""/>
        <!--        Alternative for errors behind input and not in summary -->
        <span class="errors"></span>
    </div>
    <div class="data-field">
        <label for="name">Album</label>
        <input id="name" type="text" name="name" value=""/>
    </div>
    <div class="data-field">
        <label for="genre">Genre</label>
        <input id="genre" type="text" name="genre" value=""/>
    </div>
    <div class="data-field">
        <label for="year">Year</label>
        <input id="year" type="text" name="year" value=""/>
    </div>
    <div class="data-field">
        <label for="tracks">Tracks</label>
        <input id="tracks" type="number" name="tracks" value=""/>
    </div>
<!--    <div class="data-field">-->
<!--        <label for="image">Image</label>-->
<!--        <input type="file" name="image" id="image"/>-->
<!--    </div>-->
    <div class="data-submit">
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>