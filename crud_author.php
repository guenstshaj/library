<?php

include 'db.php';

function selectAllAuthors()
{
    $conn = connectDB();

    if ($conn) {
        $sql = "SELECT * FROM author";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $authors = $stm->fetchAll(PDO::FETCH_ASSOC);
        $stm->closeCursor();
        return $authors;
    }

}

function selectAuthorById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM author WHERE id = :id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);
        $author = $stm->fetch(PDO::FETCH_ASSOC);
        $stm->closeCursor();
        return $author;
    }
}

function creatAuthor($name, $surname, $patr, $date)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO author(name, surname, patr, date) VALUES (:name, :surname, :patr, :date)";

        $stm = $conn->prepare($sql);
        $stm->execute(
            [
                'name' => $name,
                'surname' => $surname,
                'patr' => $patr,
                'date' => $date,
            ]
        );
        $stm->closeCursor();
        echo "added author";
    }
}

function updatetAuthorById($id, $name, $surname, $patr, $date)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "UPDATE author SET name=:name, surname=:surname, patr=:patr, date=:date WHERE id=:id";
        $stm = $conn->prepare($sql);
        $stm->execute(
            [
                ':id' => $id,
                'name' => $name,
                'surname' => $surname,
                'patr' => $patr,
                'date' => $date,
            ]
        );
        $stm->closeCursor();
        echo "updated author";
    }
}

function deletetAuthorById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM author WHERE id=:id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);
        $stm->closeCursor();
        echo "deleted author";
    }
}
