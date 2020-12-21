<b><h1>1.--------------------------------------</h1></b>
<?php

function h1 ($text)
{
    return "<h1>$text</h1>";
}

echo h1("čia yra mano tekstas su h1 tabu")
?>
<b><h1>2.--------------------------------------</h1></b>
<?php

function hrandom ($text,$number)
{
    $number = rand(1,6);
    return "<h$number >$text</h$number >";
}

echo hrandom("čia yra mano tekstas su atsitiktiniu tabu",3)
?>
<b><h1>3.--------------------------------------</h1></b>
<?php





function randomString ()
{
    $str = md5(time());
    $strlen = strlen( $str );
    $id = "";
    for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr($str, $i, 1);
    if(!is_numeric($char)){continue;}
    $id .= "<h1>$char</h1>";
}
echo ($id);

function insertH1($string)
{
    $range = range(0, 9); 
    $stringInserted = '';
    $count = 0;
    for ($i = 0; $i < mb_strlen($string); $i++) {
        if (array_search($string[$i], $range) || $string[$i] == '0') { 
            $stringInserted .= '<h1>';
            $count++;
        }
        $stringInserted .= $string[$i];
        if ($count) {
            $stringInserted .= '</h1>';
            $count = 0;
        }
    }
    return $stringInserted;
}
print $string = md5(time()) . '<br><br>';
print insertH1($string);
    // $text = md5(time());
    // print_r(explode( ',', $text ) );
    // foreach($text as $value){
    //     foreach($value as $value1 ){
    //         if (is_numeric($value1)) {
    //         echo "<h1>$i</h1>";
    //         continue;
    //         } 
    //     }
    //     $comma_separated = implode(",", $text);
    //     return $comma_separated;
    
    // }

// $id now contains the ID I need, in this case: 123


    // foreach ($text as $value){
    //     preg_match_all('!\d!', $text, $matches);
    //     $numbersInText = (int)implode('',$matches[0]);
    //     $just_numbers = "<h1>$numbersInText</h1>";
    //     str_replace($numbersInText,  $just_numbers, $text);
    //     return $text;
    // }

}
echo randomString();
?>

<b><h1>4.--------------------------------------</h1></b>
<?php

function number ($number) {
    if( $number <= 0){
        return 0;
    }
    $counter = 0;
    for ($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
            $counter += 1;
        }
    }
    return $counter;
}
$randomNumber = rand(1,999);
echo 'Tiek kartų '.$randomNumber.' dalijasi be liekanos :'.number($randomNumber);

?>

<b><h1>5.--------------------------------------</h1></b>
<?php

for($i = 0; $i < 100; $i++) {
    $randArray[] = rand(33, 77);
}

function sortDivisions ($array) {
    $my_new_array = [];
    foreach ( $array as $value){
        $my_new_array[] = number($value);
    }
    sort($my_new_array);
    echo '<pre>';
    print_r ($my_new_array);
}

echo sortDivisions($randArray);

?>

<b><h1>6.--------------------------------------</h1></b>
<?php

for($i = 0; $i < 5; $i++) {
    $randArray6[] = rand(333, 777);
}

function primeNumbers ($array) {
    foreach ( $array as $value){
        for($j = 1; $j < $value; $j++){
            $temp = $value%$j;
            if($temp == 1 ){
            echo "Pirminis skačius iš masyvo yra &nbsp; ".$j."<br>";
        }
    }
}
}
  
echo primeNumbers ($randArray6);

//istrinimas

// function remove (&$arr, $key){

//     unset($arr[$key]);

// }

// $array = [];

// foreach (range(0,10) as $value){
//     $array[]+=rand(333,777);
// }
// print_r($array);



// foreach($array as $key => $index){
//     if(dividers($index)==0){
//         remove($array,$key);
//     }
// }
// print_r($array);

?>

<b><h1>7.--------------------------------------</h1></b>
<?php

//suformuta paskutinis masyvas su 0 gale
$r = rand(11,20);
foreach (range(1,$r) as $value){
    $randArray7[] = rand(0, 10); 
}
array_pop($randArray7);
array_push($randArray7, 0); 

//10-30 kartai sulipinti
$randArray = [];
$r2 = rand(11,30);

for ($j = 10;$j<=$r2;$j++){
    $randArray[$j] = [];
    for ($i = 0;$i <=$r;$i++){
        $randArray[$j][$i] = rand(0, 10); 
    }
    array_pop($randArray[$j]);
    if($j == 10){ array_push($randArray[$j], $randArray7);}
    if($j > 10) {array_push($randArray[$j], $randArray[$j-1]);}
    $randArray1 = end($randArray);
}
print_r ($randArray1);

// su rekursija:
// function rekursija ($ilgis){​​​​
//     if ($ilgis == 0){​​​​
//         return 0;
//     }​​​​
//     $length = rand(10,20);
//     foreach (range(1, $length-1) as $value) {​​​​
//         $array7[] = rand(0, 10);
//     }​​​​
//     $array7[] = rekursija($ilgis-1);
//     return $array7;
// }​​​​


?>
<b><h1>8.--------------------------------------</h1></b>
<?php

$sum = 0;
array_walk_recursive( $randArray1, function($i) use(&$sum){
    $sum += $i;
});

echo $sum;

// $sum = 0;
// function suma ($array, $sum){​​
//     foreach ($array as $value){​​
//         if (is_numeric($value)){​​
//             $sum += $value;
//         }​​else {​​
//             $sum = suma($value, $sum);
//         }​​

//     }​​
//     return $sum;
// }​​
// echo suma($b, $sum);
?>

<b><h1>9.--------------------------------------</h1></b>
<?php

//ar skaicius pirminis funkcija
function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
//susikuriau array9 su 3 elementais
foreach (range(1,3) as $value){
    $array9[] = rand(1, 33); 
}
print_r ($array9);
//bandymas su  nauju pridejimu
function add($arr){
    foreach ($arr as $value){
        $num = $value;
        $primeChecker = check_prime($num);
    if ($primeChecker == 1)continue;
    else
        foreach (range(1,1) as $value){
            $arr[] = rand(1, 33); 
        }
    break;
    }
    print_r($arr);
    //paskutiniu 3 value tikrinimas
    $arr1 = array_slice($arr, -3, 3, true);
    foreach ($arr1 as $value){
        $num = $value;
        $primeChecker = check_prime($num);
    if ($primeChecker == 1)continue;
    else
        add($arr);
    break;
    }
}
echo'<br>';
add($array9);

?>
<b><h1>10.--------------------------------------</h1></b>
<?php

//susigeneruoju masyva
$array10 = [];

foreach (range(1,10) as $value){
    $array10[$value] = [];
    foreach (range(1,10) as $key){
    $array10[$value][]= rand(1,100);
    }
}
echo 'Pirminis masyvas: ';
echo '<pre>';
print_r($array10);

function getAverage ($array) {
    $average = 0;
    foreach ($array as $value){
        $counter = 0;
        $sum = 0;
        foreach ($value as $index){
            $num = $index;
            $primeChecker = check_prime($num);
            if ($primeChecker == 1){
                $sum += $num;
                $counter++;
            } else {
                continue;
            }
        }
        if( $sum == 0 && $counter == 0){
            $average = 0;
        } else {
        $average = $sum/$counter;
        }
        return $average;
    }
}

foreach ($array10 as $value => $index) {
    while (true) {
        if (getAverage($array10) > 70) {
            break;
        }
        $array10[$value][array_search(min($array10[$value]), $array10[$value])] += 3;
    }
}

echo 'Paskutinis masyvas: ';
print_r($array10);

?>