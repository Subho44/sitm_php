<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
    name: <input type="text" name = "name" required>
    <br>
    price: <input type="number" name = "price" step="0.01" required>
    <br>
    description: <textarea  name = "description"></textarea>
    <br>
    <input type="submit" value="Add data">
    </form>
    <br>
    <a href="view.php">View Data</a>
</body>
</html>