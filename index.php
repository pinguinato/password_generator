<!DOCTYPE html>
<html>
<head>
    <title>Password Generator 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Password Generator 1.0</h1>
    <form action="generate.php" method="post">
        Password length:<br>
        <input type="number" name="length" value="" size="2" min="8" max="64" required>
        <br>
        <br>
        <input type="submit" value="Generate">
    </form>
</body>
</html>
