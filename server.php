<?php

include 'crud_author.php';

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$patr = $_POST['patr'];
$date = $_POST['date'];

if (isset($_POST['updateAuthor'])) {
    updatetAuthorById($id, $name, $surname, $patr, $date);
    header('Location: index.php');
} else if (isset($_POST['deleteAuthor'])) {
    $id = $_GET['id'];
    deletetAuthorById($id);
    header('Location: index.php');
} else if (isset($_POST['addAuthor'])) {
    creatAuthor($name, $surname, $patr, $date);
    header('Location: index.php');
}
