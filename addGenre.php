
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
<h4>Add Genre </h4>

<form action="serverGenre.php" method="post">
    <label for="category">Category</label>
    <input type="text" name="category" placeholder="Category" required />
    <button type="submit" name="addGenre">Add genre</button>
</form>
</div>

</body>
</html>
