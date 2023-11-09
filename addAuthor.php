
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
<h4>Add author </h4>

<form action="server.php" method="post" class="forme">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" required />
    <label for="surname">Surname</label>
    <input type="text" name="surname" placeholder="Surname" required />
    <label for="patr">Patronyme</label>
    <input type="text" name="patr" placeholder="Patr" required />
    <label for="date">Date</label>
    <input type="date" name="date" placeholder="Date" required />
    <button type="submit" name="addAuthor">Add author</button>
</form>
</div>

</body>
</html>
