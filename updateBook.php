
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
<h4>Update Book </h4>
<?php $id = $_GET['id']?>

<form action="serverBook.php" method="post">
    <label for="id">ID</label>
    <input type="number" name="id" value="<?=$id;?>" readonly />
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Title" required />
    <label for="written">Written</label>
    <input type="number" name="written" placeholder="Written" required />
    <label for="id_author">ID Author</label>

    <Select name="id_author" placeholder="ID Author" required />

<?php

require_once 'crud_author.php';
$authors = selectAllAuthors();

foreach ($authors as $author) {
    echo "<option value='" . $author['id'] . "'>" . $author['name'] . "</option>";
}

?>

    </Select>



    <label for="id_book">ID Book</label>

    <Select name="id_genre" placeholder="ID Book" required />

<?php

$host = "localhost";
$dbname = "library";
$user = "root";
$password = "";
$conne = null;

try {

    $dsn = "mysql:host=$host;dbname=$dbname;";
    $conne = new PDO($dsn, $user, $password);
    $conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error connecting" . $e->getMessage();
}

if ($conne) {
    $sql = "SELECT * FROM genre";
    $stm = $conne->prepare($sql);
    $stm->execute();
    $books = $stm->fetchAll(PDO::FETCH_ASSOC);

    foreach ($books as $book) {
        echo "<option value='" . $book['id'] . "'>" . $book['category'] . "</option>";
    }
}

?>

    </Select>


    <button type="submit" name="updateBook">Add book</button>
</form>
</div>

</body>
</html>
