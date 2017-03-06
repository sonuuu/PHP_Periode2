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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1.3</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>


<h4>Opdracht 1.3</h4>



<a href="create.php?album-number">Create</a>

<table>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Year</th>
        <th>Tracks</th>
        <th>Genre</th>
        <th></th>
        <th></th>
    </tr>

    <?php echo $musicAlbums[0]['id'] ?>
    <?php foreach ($musicAlbums as $musicAlbum) {
        $id = $musicAlbum['id'];
        ?>
        <tr>
            <td class="image"><img src="<?= $musicAlbum['image']; ?>" alt="<?= $musicAlbum['name']; ?>"/></td>
            <td><?= $musicAlbum['id']; ?></td>
            <td><?= $musicAlbum['artist']; ?></td>
            <td><?= $musicAlbum['name']; ?></td>
            <td><?= $musicAlbum['genre']; ?></td>
            <td><?= $musicAlbum['year']; ?></td>
            <td><?= $musicAlbum['tracks']; ?></td>
            <td><a href="detail.php?id=<?= $musicAlbum['id']; ?>">Details</a></td>
            <td><a href="edit.php?id=<?= $musicAlbum['id']; ?>">Edit</a></td>

        </tr>
    <?php } ?>



</table>


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</body>
</html>