<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW1</title>
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

<a href ="http://localhost/BIT_KURSAI_PHP/Pirmas/hw7/1/black.php">linkas i save</a>
<br>
<a href="?color=1">linkas su GET</a>

<?php
if(isset($_GET['color'])){
    if($_GET['color']==1){echo '<style>html{background:red;}</style>';}
}
?>
