<?php
//controleren of data valid is
$errors = [];
if ($artist == "") {
    $errors['artist'] = 'Artist cannot be empty'; //Alternative for errors behind input and not in summary
}
if ($name == "") {
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
