
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
    <li><a href="genre.php">Genre</a></li>
    <li><a href="#" class="default">Book</a></li>
    <li><a href="addBook.php" class="btn-add">Add Book</a></li>
</ul>

<table>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>ID AUTHOR</th>
        <th>ID BOOK</th>
        <th>WRITTEN</th>
        <th>ACTIONS</th>
    </tr>


    <?php

include 'crud_book.php';
$books = selectAllBooks();

foreach ($books as $book) {

    echo "<tr>" .
        "<td>" . $book['id'] . "</td>" .
        "<td>" . $book['title'] . "</td>" .
        "<td>" . $book['id_author'] . "</td>" .
        "<td>" . $book['id_genre'] . "</td>" .
        "<td>" . $book['written'] . "</td>" .
        "<td><a href='updateBook.php?id=" . $book['id'] . "' class='edit'>Edit</a>
        <form action='serverBook.php?id=" . $book['id'] . "' method='post' id='formdelete'>
            <input type='submit' name='deleteBook' value='Delete' id='delete_btn'>
        </form>" .
        "</tr>";
}

?>

</table>
</div>

</body>
</html>
