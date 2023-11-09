<?php

include 'crud_book.php';

$id = $_POST['id'];
$title = $_POST['title'];
$written = $_POST['written'];
$id_author = $_POST['id_author'];
$id_genre = $_POST['id_genre'];

if (isset($_POST['addBook'])) {
    creatBook($title, $written, $id_author, $id_genre);
    echo 'added book';
    header('Location: book.php');
} else if (isset($_POST['updateBook'])) {
    updatetBookById($id, $title, $written, $id_genre, $id_author);
    echo 'updated book';
    header('Location: book.php');
} else if (isset($_POST['deleteBook'])) {
    $id = $_GET['id'];
    deletetBookById($id);
    echo 'deleted book';
    header('Location: book.php');
}
