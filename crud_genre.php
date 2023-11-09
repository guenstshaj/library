<?php

include 'db.php';

function selectAllGenres()
{
    $conn = connectDB();

    if ($conn) {
        $sql = "SELECT * FROM genre";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $authors = $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->closeCursor();
        return $authors;
    }

}

function selectGenreById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM genre WHERE id = :id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);
        $author = $stm->fetch(PDO::FETCH_ASSOC);
        $stm->closeCursor();
        return $author;
    }
}

function creatGenre($category)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO genre(category) VALUES (:category)";

        $stm = $conn->prepare($sql);
        $stm->execute(
            [
                'category' => $category,
            ]
        );
        $stm->closeCursor();
        echo "added genre";
    }
}

function updatetGenreById($id, $category)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "UPDATE genre SET category = :category WHERE id = :id";
        $stm = $conn->prepare($sql);
        $stm->execute(
            [
                ':id' => $id,
                ':category' => $category,
            ]
        );
        $stm->closeCursor();
        echo "updated genre";
    }
}

function deletetGenreById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM genre WHERE id=:id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);
        $stm->closeCursor();
        echo "deleted genre";
    }
}
