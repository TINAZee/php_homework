<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3</title>
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

<form>
<input type="text" name="color">
<button type="submit">Change background</button>
</form>
<a href='?'>Link back to black background</a><br>

<?php

if(isset($_GET['color'])){

    echo '<style>html{background:#'.$_GET['color'].';}</style>';
}

?>

