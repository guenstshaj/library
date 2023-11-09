<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
    <title>Library</title>
</head>
<body>

<div class="container">
<h1><a href="index.php"><img src="/icons/icons8_books_48px.png"> Welcome in the <span> library</span></a></h1>
<h4>Select your choice: </h4>
<ul>
    <li><a href="#" class="default">Author</a></li>
    <li><a href="genre.php">Genre</a></li>
    <li><a href="book.php">Book</a></li>
    <li><a href="addAuthor.php" class="btn-add">Add author</a></li>
</ul>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>PATR</th>
        <th>DATE</th>
        <th>ACTIONS</th>
    </tr>




<?php

include 'crud_author.php';
$authors = selectAllAuthors();

foreach ($authors as $author) {
    echo "<tr>" .
        "<td>" . $author['id'] . "</td>" .
        "<td>" . $author['name'] . "</td>" .
        "<td>" . $author['surname'] . "</td>" .
        "<td>" . $author['patr'] . "</td>" .
        "<td>" . $author['date'] . "</td>" .
        "<td><a href='updateAuthor.php?id=" . $author['id'] . "' class='edit'>Edit</a>
        <form action='server.php?id=" . $author['id'] . "' method='post' id='formdelete'>
            <input type='submit' name='deleteAuthor' value='Delete' id='delete_btn'>
        </form>" .
        "</tr>";
}

?>

</table>
</div>

</body>
</html>
