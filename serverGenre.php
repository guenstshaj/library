<?php

include 'crud_genre.php';

$id = $_POST['id'];
$category = $_POST['category'];

if (isset($_POST['updateGenre'])) {
    updatetGenreById($id, $category);
    header('Location: genre.php');
} else if (isset($_POST['addGenre'])) {
    creatGenre($category);
    header('Location:genre.php');
} else if (isset($_POST['deleteGenre'])) {
    $id = $_GET['id'];
    deletetGenreById($id);
    header('Location:genre.php');
}
