<b><h1>1.--------------------------------------</h1></b>

<?php

$name = 'Šmikis';
$lastname = 'Šmakis';
$born_year = 2000;
$this_year = 2020;

$how_old_im = $this_year - $born_year;

echo "<b>Aš esu $name $lastname. Man yra $how_old_im metai.</b>";

?>

<b><h1>2.--------------------------------------</h1></b>

<?php

$first = rand(0, 4);
$second = rand(0, 4);

if($first > $second && $second !=0) {
    //galima naudoti number for math
    echo (round($first/$second, 2));
}
elseif($first < $second && $first !=0) {
    echo (round($second/$first, 2));
}
elseif($first == 0 || $second == 0){
    echo "dalyba su nuliais negalima";
}
elseif($first = $second){
    echo "dalyba tarp vienodu skaiciu yra 1";
}

?>

<b><h1>3.--------------------------------------</h1></b>

<?php

$first1 = rand(0, 25);
$second1 = rand(0, 25);
$third1 = rand(0, 25);

echo "$first1 $second1 $third1";
echo '<br>'; 

if($first1 < $second1 && $first1 > $third1) {
    echo $first1;
}
elseif($second1 < $first1 && $second1 > $third1) {
    echo $second1;
}
elseif($third1 < $first1 && $third1 > $second1) {
    echo $third1;
}
elseif($third1 = $first1 || $third1 = $second1 || $second1 = $third1) {
    echo "yra du vienodi skaiciai";
}
?>

<b><h1>4.--------------------------------------</h1></b>

<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

//pagal krastiniu suma
echo ($a + $b > $c && $a + $c > $b && $b + $c > $a) ? 'Triangle is possible.' : 'You cannot make a triangle.';

//su pitagoro teorema
if (pow(2,$a) === pow(2,$b) + pow(2,$c)){
    echo "Taip, prašau brėžki trikampiuka ";
}
elseif(pow(2,$b) === pow(2,$a) + pow(2,$c)){
    echo "Taip, prašau brėžki trikampiuka ";
}
elseif(pow(2,$c) === pow(2,$a) + pow(2,$b)){
    echo "Taip, prašau brėžki trikampiuka ";
}
else {
    echo "Ne, trikampiuko nebus";
}
?>

<b><h1>5.--------------------------------------</h1></b>

<?php

$one = rand(0, 2);
$two = rand(0, 2);
$three = rand(0, 2);
$four = rand(0, 2);

//smart sprendimas
$count0 = $count1 = $count2 = 0;

${'count' . $one}++;
${'count' . $two}++;
${'count' . $three}++;
${'count' . $four}++;

echo "0 kartų: $count0<br> 1 kartų: $count1 <br> 2 kartų: $count2";

//sprendimas su daug if
$how_many_zeros = 0;
$how_many_ones = 0;
$how_many_twoes = 0;

echo "1:$one<br>   2:$two<br>   3:$three<br>   4:$four<br>";

if($one === 0 ) {
    $how_many_zeros++;
}
if($one === 1) {
    $how_many_ones++;
}
if($one === 2) {
    $how_many_twoes++;
}
if($two === 0 ) {
    $how_many_zeros++;
}
if($two === 1) {
    $how_many_ones++;
}
if($two === 2) {
    $how_many_twoes++;
}
if($three === 0 ) {
    $how_many_zeros++;
}
if($three === 1) {
    $how_many_ones++;
}
if($three === 2) {
    $how_many_twoes++;
}
if($four === 0 ) {
    $how_many_zeros++;
}
if($four === 1) {
    $how_many_ones++;
}
if($four === 2) {
    $how_many_twoes++;
}
echo "nuliu yra: $how_many_zeros";
echo '<br>'; 
echo "vienetu yra: $how_many_ones";
echo '<br>'; 
echo "dvejetu yra: $how_many_twoes";
?>

<b><h1>6.--------------------------------------</h1></b>

<?php

$number = rand(1, 6);

echo "<h$number>$number</h$number>";

?>

<b><h1>7.--------------------------------------</h1></b>

<?php
//su ternary

$f = rand(-10, 10);
$s = rand(-10, 10);
$t = rand(-10, 10);

$fColor = ($f < 0) ? "green" : ($f == 0 ? "red" : "blue");
$sColor = ($s < 0) ? "green" : ($s == 0 ? "red" : "blue");
$tColor = ($t < 0) ? "green" : ($t == 0 ? "red" : "blue");


echo "<p> <font color=$fColor>$f</font> </p>", 
    "<p> <font color=$sColor>$s</font> </p>", 
    "<p> <font color=$tColor>$t</font> </p>";

//su ifais

$one1 = rand(-10, 10);
$two2 = rand(-10, 10);
$three3 = rand(-10, 10);

if($one1 < 0 ){
    echo '<font color="green">'.$one1.'</font>';
}
if($one1 === 0){
    echo '<font color="red">'.$one1.'</font>';
}
if($one1 > 0){
    echo '<font color="blue">'.$one1.'</font>';
}
echo '<br>'; 

if($two2 < 0 ){
    echo '<font color="green">'.$two2.'</font>';
}
if($two2 === 0){
    echo '<font color="red">'.$two2.'</font>';
}
if($two2 > 0){
    echo '<font color="blue">'.$two2.'</font>';
}
echo '<br>'; 

if($three3 < 0 ){
    echo '<font color="green">'.$three3.'</font>';
}
if($three3 === 0){
    echo '<font color="red">'.$three3.'</font>';
}
if($three3 > 0){
    echo '<font color="blue">'.$three3.'</font>';
}

?>

<b><h1>8.--------------------------------------</h1></b>

<?php

$candle = rand(5, 3000);

$price = $candle;

if($price < 1000){
    echo "Buvo pirkta $candle žvakių, mokėta už jas $price eurai.";
}
if($price >= 1000 && $price < 2000){
    $price = $price * 0.97;
    echo "Buvo pirkta $candle žvakių, mokėta už jas $price eurai.";
}
if($price >= 2000){
    $price = $price * 0.96;
    echo "Buvo pirkta $candle žvakių, mokėta už jas $price eurai.";
}

?>

<b><h1>9.--------------------------------------</h1></b>

<?php

$one11 = rand(0, 100);
$two22 = rand(0, 100);
$three33 = rand(0, 100);

$average_first = (floor(($one11 + $two22 + $three33)/3));

echo "Pirmas išvestas vidurkis yra: $average_first.";
echo '<br>'; 

if($one11 < 10 || $one11 > 90){
    $average_second = (floor(($two22 + $three33)/3));
    echo "Antras išvestas vidurkis yra: $average_second.";
}
elseif($two22 < 10 || $two22 > 90){
    $average_second = (floor(($one11 + $three33)/3));
    echo "Antras išvestas vidurkis yra: $average_second.";
}
elseif($three33 < 10 || $three33 > 90){
    $average_second = (floor(($two22 + $one11)/3));
    echo "Antras išvestas vidurkis yra: $average_second.";
}
else{
    $average_second = (floor(($one11 + $two22 + $three33)/3));
    echo "Antras išvestas vidurkis yra: $average_second.";
}

?>

<b><h1>10.--------------------------------------</h1></b>

<?php

$hour = rand(1, 23);
$minute = rand(1, 60);
$second = rand(1, 60);


echo "Pirmas skaitmeninis laikrodis yra toks $hour : $minute : $second.";
echo '<br>'; 

$extra_seconds = rand(0, 300);

$new_seconds = $second + $extra_seconds;

if ($new_seconds < 60) {
    echo "Antras skaitmeninis laikrodis yra toks $hour : $minute : $new_seconds.";
}
if ($new_seconds >= 60 && $new_seconds <= 120) {
    $newest_seconds = $new_seconds-60;
    $new_minute = $minute + 1;
    echo "Antras skaitmeninis laikrodis yra toks $hour : $new_minute : $newest_seconds.";
}
if ($new_seconds >= 120 && $new_seconds <= 180) {
    $newest_seconds = $new_seconds-120;
    $new_minute = $minute + 2;
    echo "Antras skaitmeninis laikrodis yra toks $hour : $new_minute : $newest_seconds.";
}
if ($new_seconds >= 180 && $new_seconds <= 240) {
    $newest_seconds = $new_seconds-180;
    $new_minute = $minute + 3;
    echo "Antras skaitmeninis laikrodis yra toks $hour : $new_minute : $newest_seconds.";
}
if ($new_seconds >= 240 && $new_seconds <= 300) {
    $newest_seconds = $new_seconds-240;
    $new_minute = $minute + 4;
    echo "Antras skaitmeninis laikrodis yra toks $hour : $new_minute : $newest_seconds.";
}

?>

<b><h1>11.--------------------------------------</h1></b>

<?php

$a1 = rand(1000, 9999);
$b1 = rand(1000, 9999);
$c1 = rand(1000, 9999);
$d1 = rand(1000, 9999);
$e1 = rand(1000, 9999);
$f1 = rand(1000, 9999);

echo "Pirmas nesusortinta eilutė yra: $a1 $b1 $c1 $d1 $e1 $f1 ";
echo '<br>'; 

$toarr = "$a1, $b1, $c1, $d1, $e1, $f1";
$arr = explode(',', $toarr);

rsort($arr, SORT_NUMERIC);

$toarr = implode(',', $arr);
echo "Antra jau susortinta eilute yra: $toarr";

echo '<br><br>11...............................<br>';
$num1 = rand(1000, 9999);
$num2 = rand(1000, 9999);
$num3 = rand(1000, 9999);
$num4 = rand(1000, 9999);
$num5 = rand(1000, 9999);
$num6 = rand(1000, 9999);

echo "Skaičiai: $num1, $num2, $num3, $num4, $num5, $num6 <br>";

// $temporaryNum0 = $temporaryNum1 = $temporaryNum2 = $temporaryNum3 = $temporaryNum4 = $temporaryNum5 = 0;

${'temporaryNum' . (
    ($num1 > $num2 ? 1 : 0) +
    ($num1 > $num3 ? 1 : 0) +
    ($num1 > $num4 ? 1 : 0) +
    ($num1 > $num5 ? 1 : 0) +
    ($num1 > $num6 ? 1 : 0))} = $num1;
${'temporaryNum' . (
    ($num2 > $num1 ? 1 : 0) +
    ($num2 > $num3 ? 1 : 0) +
    ($num2 > $num4 ? 1 : 0) +
    ($num2 > $num5 ? 1 : 0) +
    ($num2 > $num6 ? 1 : 0) +
    ($num2 == $num1 ? 1 : 0))} = $num2;
${'temporaryNum' . (
    ($num3 > $num2 ? 1 : 0) +
    ($num3 > $num1 ? 1 : 0) +
    ($num3 > $num4 ? 1 : 0) +
    ($num3 > $num5 ? 1 : 0) +
    ($num3 > $num6 ? 1 : 0) +
    ($num3 == $num1 ? 1 : 0) +
    ($num3 == $num2 ? 1 : 0))} = $num3;
${'temporaryNum' . (
    ($num4 > $num2 ? 1 : 0) +
    ($num4 > $num3 ? 1 : 0) +
    ($num4 > $num1 ? 1 : 0) +
    ($num4 > $num5 ? 1 : 0) +
    ($num4 > $num6 ? 1 : 0) +
    ($num4 == $num1 ? 1 : 0) +
    ($num4 == $num2 ? 1 : 0) +
    ($num4 == $num3 ? 1 : 0))} = $num4;
${'temporaryNum' . (
    ($num5 > $num2 ? 1 : 0) +
    ($num5 > $num3 ? 1 : 0) +
    ($num5 > $num4 ? 1 : 0) +
    ($num5 > $num1 ? 1 : 0) +
    ($num5 > $num6 ? 1 : 0) +
    ($num5 == $num1 ? 1 : 0) +
    ($num5 == $num2 ? 1 : 0) +
    ($num5 == $num3 ? 1 : 0) +
    ($num5 == $num4 ? 1 : 0))} = $num5;
${'temporaryNum' . (
    ($num6 > $num2 ? 1 : 0) +
    ($num6 > $num3 ? 1 : 0) +
    ($num6 > $num4 ? 1 : 0) +
    ($num6 > $num5 ? 1 : 0) +
    ($num6 > $num1 ? 1 : 0) +
    ($num6 == $num1 ? 1 : 0) +
    ($num6 == $num2 ? 1 : 0) +
    ($num6 == $num3 ? 1 : 0) +
    ($num6 == $num4 ? 1 : 0) +
    ($num6 == $num5 ? 1 : 0))} = $num6;

// $result = "$temporaryNum0 $temporaryNum1 $temporaryNum2 $temporaryNum3 $temporaryNum4 $temporaryNum5"; // Nuo mažiausio
$result = "$temporaryNum5 $temporaryNum4 $temporaryNum3 $temporaryNum2 $temporaryNum1 $temporaryNum0"; // Nuo didžiausio
echo "Rezultatas: $result";


// gudravimas
echo "<br><br> 11.2. (Neleist generuot didesnio už prieš tai buvusį).<br>";
$num1 = rand(1000, 9999);
$num2 = rand(1000, $num1);
$num3 = rand(1000, $num2);
$num4 = rand(1000, $num3);
$num5 = rand(1000, $num4);
$num6 = rand(1000, $num5);
$result = "$num1 $num2 $num3 $num4 $num5 $num6";
echo $result;

?>