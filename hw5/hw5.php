<b><h1>1.--------------------------------------</h1></b>
<?php

$my_array = [];

foreach (range(1,10) as $value){
    $my_array[$value] = [];
    foreach (range(1,5) as $key){
    $my_array[$value][]= rand(5, 25);
    }
}

echo '<pre>';
print_r($my_array);

?>

<b><h1>2.--------------------------------------</h1></b>
<?php
echo '<br>';
echo '<h2>a)</h2>';
$counter = 0;
foreach ($my_array as $value) {
    if (is_array($value)) {
        foreach ($value as $key){
            if($key > 10) {
                $counter++;
            }
        }
    }
}
echo "Reikšmių didesnių už 10 yra: $counter";
echo '<br>';
echo '<h2>b)</h2>';
echo '<br>';

$max = 0;
foreach ($my_array as $value) {
    if (is_array($value)) {
        foreach ($value as $key){
            if ($key > $max) {
                $max = $key;
            }
        }
    }
}
echo 'Didziausia masyvo reiksme: '.$max;

echo '<br>';
echo '<h2>c)</h2>';
echo '<br>';

foreach ($my_array as $value => $index ) {
    echo '<pre>';
    echo 'Indekso numeris: '.$value.' suma yra: ';
    print_r(array_sum($index));
}

echo '<br>';
echo '<h2>d)</h2>';
echo '<br>';

foreach ($my_array as &$smallArray){
    foreach (range(1,3) as $key){
    $smallArray[]= rand(5, 25);
    }
}

echo '<pre>';
print_r($my_array);

echo '<br>';
echo '<h2>e)</h2>';
echo '<br>';

$sum_array = [];

foreach ($my_array as $value => $index ) {
    foreach (range(1, 1) as $value){
        $sum_array[] = array_sum($index);
    }
}
echo '<pre>';
print_r($sum_array);

?>
<b><h1>3.--------------------------------------</h1></b>
<?php

// $array = [];
// $rand = range('A', 'Z');
// foreach (range(0, 9) as $arr) {
//     foreach (range(2, rand(3, 20)) as $value) {
//         $array[$arr][] = $rand[rand(0, 25)];
//         sort($array[$arr]);
//     }
// }
// print_r($array);

$range = range('A', 'Z');
$my_array_3 = [];

foreach (range(1,10) as $value){
    $my_array_3[$value] = [];
    foreach (range(rand(2,20),rand(2,20)) as $value1 => $key){
        $my_array_3[$value][] = $range[rand(0, 25)];
        sort($my_array_3[$value]);
    }
    
}

echo '<pre>';
print_r($my_array_3);
echo '<br>';

// $arr = [];
// $arrRez = [];
// $range = range('A', 'Z');
// for ($i = 0; $i < 10; $i++) {
//     $r = rand(2, 20);
//     for ($j = 0; $j < $r; $j++) {
//         $index = array_rand($range);
//         $arr[$j] ="$range[$index]";
//     }
//     sort($arr);
//     $arrRez[$i] = $arr;
//     $arr = [];
//     }

// print_r($arrRez);
?>
<b><h1>4.--------------------------------------</h1></b>
<?php

sort($array);
print_r($array);

?>
<b><h1>5.--------------------------------------</h1></b>
<?php

$arr = [];

foreach (range(0, 29) as $value) {

    $randUser = rand(1, 1000000);

    (in_array($randUser, $arr) == true) ?: $arr[] = [

        'user_id' => $randUser, 

        'place_in_row' => rand(0, 100)];

}

print_r($arr);

// variantas su for
$array = [];
for($i=0;$i<30;$i++) {
    $user_id = rand(1, 1000000);
    $place_in_row = rand(1, 100);
    if (in_array($user_id, array_column($array, 'user_id'))) {
        $i--;
        continue;
    }
    if (in_array($place_in_row, array_column($array, 'place_in_row'))) {
        $i--;
        continue;
    }
    $array[$i] = array(
        "user_id" => $user_id,
        "place_in_row" => $place_in_row
    );
}
print_r($array);

?>
<b><h1>6.--------------------------------------</h1></b>
<?php

function cmp($arrA, $arrB)
{
    $a = $arrA["place_in_row"];
    $b = $arrB["place_in_row"];
    return $b <=> $a;
}
usort($arr, "cmp");

print_r($arr);

?>
b><h1>7.--------------------------------------</h1></b>
<?php

$str = range('a', 'z');

foreach ($arr as $key => &$value) {
    $value['name'] ='';
    $value['surname'] = '';
    foreach (range(5, rand(10, 20)) as $k => $v) {
        $value['name'] .= $str[rand(0, 25)];
        $value['surname'] .= $str[rand(0, 25)];
    }
}
print_r($arr);

?>
b><h1>8.--------------------------------------</h1></b>
<?php

foreach (range(0, 9) as $value12) {
    $rand = rand(0, 5);
    if($rand === 0){
        $masyvas[] = rand(0, 10);
    } else {
        $array8 = [];
        foreach (range(1, $rand) as $value12){
            $array8[] = rand(0,10);
        }
        $masyvas[] = $array8;
    }
}
print_r($masyvas);
?>

b><h1>9.--------------------------------------</h1></b>
<?php

function cmp1($A, $B)
{
    $a = is_array($A) ? array_sum($A) : $A;
    $b = is_array($B) ? array_sum($B) : $B;
    return $b <=> $a;
}
usort($masyvas, "cmp1");

print_r($masyvas);

?>

b><h1>10.--------------------------------------</h1></b>
<?php

$array = [];
foreach (range(0, 9) as $i) {
    foreach (range(0, 9) as $u) {
        $value = explode(' ', '# % + * @ 裡')[rand(0, 5)];
        $color = '#'.substr(md5(rand(0, 99)), 0, 6);
        $array[$i][$u] = array(
            'value' => $value,
            'color' => $color
        );
    }
}
foreach ($array as $arrays) {
    foreach ($arrays as $item) {
        echo '<div class=kvdr style=color:' . $item['color'] . '>' . $item['value'] . '</div>';
    }
    echo '<br>';
}


?>