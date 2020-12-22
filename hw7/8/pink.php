<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW8</title>
</head>
<body>
    
</body>
</html>

<style>
html  {
 background-color: pink;
}
a {
 color: white;
}
</style>
<form action="rose.php"method="post">
<button type="submit">Go to rose</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: http://localhost/BIT_KURSAI_PHP/Pirmas/hw7/8/rose.php');
    die;
}
?>