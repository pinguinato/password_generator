<?php
require('functions.php');
$result = randomPassword($_POST['length']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Password Generator 1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>Password Generator 1.0</h1>
<p>
    <h2><?php echo $result; ?></h2>
</p>
<br>
<div><a href="index.php">EXIT</a></div>
</body>
</html>
