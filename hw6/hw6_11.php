<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b><h1>11.--------------------------------------</h1></b>
<?php

$array11 = [];

foreach (range(10,rand(11,100)) as $value){
    $array11[$value] = [];
    foreach (range(1,10) as $key){
        $array11[$value][]= rand(1,100);
    }
}

echo'<pre>';
print_r($array11);

?>
</body>
</html>