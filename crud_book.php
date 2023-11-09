<?php

include 'db.php';

function selectAllBooks()
{
    $conn = connectDB();

    if ($conn) {
        $sql = "SELECT * FROM book";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $books = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $books;
    }

}

function selectBookById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "SELECT * FROM book WHERE id = :id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);
        $book = $stm->fetch(PDO::FETCH_ASSOC);

        return $book;
    }
}

function creatBook($title, $written, $id_genre, $id_author)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "INSERT INTO book (title, written, id_genre, id_author) VALUES (:title, :written, :id_author, :id_genre)";

        $stm = $conn->prepare($sql);
        $stm->execute([
            ':title' => $title,
            ':written' => $written,
            ':id_genre' => $id_genre,
            ':id_author' => $id_author,
        ]);

        echo "added book";
    }
}

function updatetBookById($id, $title, $written, $id_genre, $id_author)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "UPDATE book SET title=:title,written=:written, id_author= :id_author ,id_genre=:id_genre WHERE id=:id";
        $stm = $conn->prepare($sql);
        $stm->execute(
            [
                'title' => $title,
                'written' => $written,
                'id_genre' => $id_genre,
                'id_author' => $id_author,
                'id' => $id,
            ]
        );

        echo "updated genre";
    }
}

function deletetBookById($id)
{
    $conn = connectDB();
    if ($conn) {
        $sql = "DELETE FROM book WHERE id=:id";
        $stm = $conn->prepare($sql);
        $stm->execute([':id' => $id]);

        echo "deleted book";
    }
}
