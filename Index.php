<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="list_create.php" method="post">
    List Name: <input type="text" name="name" /><br><br>
    <input type="submit" />
</form>
<? 
include 'connect.php';
?> 
</body>
</html>