<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW2</title>
</head>
<body>
    
</body>
</html>
<style>
html  {
 background-color: black;
}
a {
 color: white;
}
</style>

<?php

if (isset($_GET['color'])) {
    echo '<style>html{background:#'.$_GET['color'].';}</style>';
}
?>
<a href='?'>Nuoroda i save</a><br>