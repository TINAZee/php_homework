<b><h1>1.--------------------------------------</h1></b>
<?php
for($i = 0; $i < 30; $i++){
    $my_array[] = mt_rand(5, 25);
}
echo '<pre>';
print_r($my_array);

?>
<b><h1>2.--------------------------------------</h1></b>
<h2>a)</h2>
<?php
$counter = 0;
foreach ($my_array as $value) {
    if($value > 10) {
        $counter++;
    }
 }
echo "Reikšmių didesnių už 10 yra: $value";
echo '<br>';
echo '<h2>b)</h2>';

echo 'Didziausia masyvo reiksme: '.max($my_array);

echo '<br>';
echo '<h2>c)</h2>';

echo "Reiksmiu suma: " . array_sum($my_array) . "\n";

echo '<br>';
echo '<h2>d)</h2>';

echo '<pre>';
print_r($my_array);

foreach ($my_array as $index => $value) {
    $reiksme = $value - $index;
    $naujasmasyvas[] = $reiksme;
}
echo '<pre>';
print_r($naujasmasyvas);

echo '<br>';
echo '<h2>e)</h2>';

foreach (range(1, 10) as $value){
    $my_array[] = rand(5, 25);
}
echo '<pre>';
print_r($my_array);

echo '<br>';
echo '<h2>f)</h2>';

$odd = [];
$even = [];
foreach ($my_array as $value) {
    if ($value % 2 == 0) {
        $even[] = $value;
    }
    else {
        $odd[] = $value;
    }
}
echo '<pre>';
echo 'Neporinių skaičių masyvas : ';
echo '<br>';
print_r($odd);
echo '<br>';
echo '<pre>';
echo 'Porinių skaičių masyvas : ';
echo '<br>';
print_r($even);

echo '<br>';
echo '<h2>g)</h2>';

foreach($even as $value => &$index){
   if($value >= 15) {
    $index = 0;  
   }
}
echo 'Skaičių masyvas su pakeistais 15 elementais : ';
echo '<br>';
echo '<br>';
print_r($even);

echo '<br>';
echo '<h2>h)</h2>';

foreach ($my_array as $key => $item) {
    if ($item > 10) {
        echo "Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10: $key";
        break;
    }
}

echo '<br>';
print_r($my_array);
echo '<br>';
print_r($key);

echo '<br>';
echo '<h2>i)</h2>';

foreach($my_array as $value => $index){
    if($value % 2 == 0) {
    unset($my_array[$value]);
    }
}
echo '<br>';
print_r($my_array);
echo '<br>';


?>
<b><h1>3.--------------------------------------</h1></b>
<?php

for($i = 0; $i <= 200; $i++){
    $range = range('A', 'D');
    $index = array_rand($range);
    $my_array_3[] = $range[$index];
}
echo '<pre>';
print_r($my_array_3);
echo '<br>';
print_r(array_count_values($my_array_3));
?>
<b><h1>4.--------------------------------------</h1></b>
<?php
sort($my_array_3);
echo '<pre>';
print_r($my_array_3);

?>
<b><h1>5.--------------------------------------</h1></b>
<?php
$arry1 = [];
$arry2 = [];
$arry3 = [];
for ($i = 0; $i < 200; $i++) {
    array_push($arry1, chr(rand(65, 68)));
    array_push($arry2, chr(rand(65, 68)));
    array_push($arry3, chr(rand(65, 68)));
}

for ($i = 0; $i < 200; $i++) {
    $arry1[$i] .= $arry1[$i] . $arry2[$i] . $arry3[$i];
}

echo 'Unikaliu reiksmiu: ' . count(array_unique($arry1));
?>

<b><h1>6.--------------------------------------</h1></b>
<?php
$numbers = range(100, 999);
shuffle($numbers);
$numbers2 = range(100, 999);
shuffle($numbers2);
for ($i = 0; $i < 100; $i++) {
    $arr1[$i] = $numbers[$i];
    $arr2[$i] = $numbers2[$i];
}
print_r($arr1);
echo '<br>';
print_r($arr2);

?>
<b><h1>7.--------------------------------------</h1></b>
<?php

$array3 = array_intersect($arr1, $arr2);   
print_r($array3);

$arr3 = array_diff($arr1, $arr2);   
print_r($arr3);
?>
<b><h1>8.--------------------------------------</h1></b>
<?php

$array3 = array_intersect($arr1, $arr2);   
print_r($array3);


?>
<b><h1>9.--------------------------------------</h1></b>
<?php

$array33 = array_combine($arr1, $arr2);   
print_r($array33);

?>
<b><h1>10.--------------------------------------</h1></b>
<?php

$array10 = [];
$array10[0] = rand(5, 25);
$array10[1] = rand(5, 25);
for ($i = 2; $i < 10; $i++) {
    $array10[$i] = $array10[$i-2] + $array10[$i-1];
}

echo '<pre>';
print_r($array10);
?>

<b><h1>11.--------------------------------------</h1></b>
<?php



?>