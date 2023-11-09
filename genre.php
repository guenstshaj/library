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
    <li><a href="index.php">Author</a></li>
    <li><a href="#" class="default">Genre</a></li>
    <li><a href="book.php">Book</a></li>
    <li><a href="addGenre.php" class="btn-add">Add genre</a></li>
</ul>

<table>
    <tr>
        <th>ID</th>
        <th>CATEGORY</th>
        <th>ACTIONS</th>
    </tr>

<?php

include 'crud_genre.php';
$genres = selectAllGenres();

foreach ($genres as $genre) {
    echo "<tr>" .
        "<td>" . $genre['id'] . "</td>" .
        "<td>" . $genre['category'] . "</td>" .
        "<td><a href='updateGenre.php?id=" . $genre['id'] . "' class='edit'>Edit</a>
        <form action='serverGenre.php?id=" . $genre['id'] . "' method='post' id='formdelete'>
            <input type='submit' name='deleteGenre' value='Delete' id='delete_btn'>
        </form>" .
        "</tr>";
}

?>

</table>
</div>

</body>
</html>
