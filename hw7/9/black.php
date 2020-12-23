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
 background-color: blue;
}
a {
 color: white;
}
</style>
<form action="" method="POST">

<?php
$r=rand(3,10);
$ch = 'A';
for ($i=0; $i < $r; $i++) { 
    if($i == 0){
    echo "<br><label><input type='checkbox' /name = 'checkbox[]'>$ch</label><br>";
    }
    $next_ch = ++$ch;
    echo "<br><label><input type='checkbox' /name = 'checkbox[]'>$next_ch</label><br>"; 
}

?>

<button type="submit">Change background and form</button>

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$checked_arr = $_POST['checkbox'] ?? [];
$count = count($checked_arr);
echo "There are ".$count." checkboxe(s) are checked, all: $r";
echo '<style>html{background:yellow;}</style>';
}
?>