
<style type="text/css">
.space {
   display: inline;
   float:left;
   width:1000px;
   margin-left: 10px;
   margin-right: 10px;
   word-break: break-all;
}
.whiteSpace {
   white-space: pre;
}
</style>
<span class=space>
<b><h1>1.--------------------------------------</h1></b>
<h2>a)</h2>
<?php
$z = '*';
for ($i = 0;$i <= 400;$i++){
   echo $z;
}
?>
<h2>b)</h2>
<?php
for ($a = 1; $a <= 8; $a++) {
   echo '<br>';
   for ($x = 1; $x <= 50; $x++) {
       echo $z;
   }
}

?>

<b><h1>2.--------------------------------------</h1></b>

<p>Sugeneruoti numeriai :</p>

<?php

$numbers = range(1, 300);
shuffle($numbers);
$count = 0;
foreach ($numbers as $number) {
   if($number > 275) {
      echo '<font color="red">'."$number ".'</font>';
   }
   elseif($number > 150) {
      $count++;
   } else {
      echo "$number ";
   };
}
echo '<br>';
echo "Iš viso skaičių daugiau negu 150 buvo: $count ";
?>

<b><h1>3.--------------------------------------</h1></b>

<?php

$numbers = range(1, rand(1,4000));
shuffle($numbers);

foreach ($numbers as $number) {
   if($number % 77 == 0) {
    echo "$number,";
   }
}
echo trim($number, ",");
echo '<br>';
// destytojo metodas, pirmiau pries pirma pasidaryti kableli
$iki = rand(3000, 4000);
$pirmas = false;
for ($i=1; $i<=$iki; $i++) {
    if(!($i % 77)){
        if (!$pirmas) {
            echo $i;
            $pirmas = true;
        }
        else {
            echo ", $i";
        }
    }
}

?>
<b><h1>4.--------------------------------------</h1></b>
<span class = whiteSpace>
<?php
for ($a = 1; $a <= 10; $a++) {
   echo '<br>';
   for ($x = 1; $x <= 10; $x++) {
       echo str_repeat(' ', 3).$z ;
   }
}
?>
</span>
<b><h1>5.--------------------------------------</h1></b>
<span class = whiteSpace>
<?php
$star = str_repeat(' ', 3).$z;
$size = 10;
for ($i = 0; $i < $size; $i++) {
   echo '<br>';
   for ($j = 0; $j < $size; $j++) {
      if ($i == $j ||  $i + $j == $size - 1) {
         echo '<font color="red">'.$star.'</font>';
      } else {
       echo $star;
      }
   }
}
?>
</span>
<b><h1>6.--------------------------------------</h1></b>
<?php

echo '<h2>paprastas 10 kartu metimas</h2>';
for ($i = 0; $i < 10; $i++) {
  $num = rand(0,1);
  if($num == 0){
     echo 'H';
  }
  elseif($num == 1){
     echo 'S';
  }
}
echo '<h2>a)</h2>';
for ($i = 0; $i < 100; $i++) {
  $num = rand(0,1);
  if($num == 0){
  break;
  }
  elseif($num == 1){
     echo 'S';
  }
}
echo '<h2>b)</h2>';
$count = 0;
$count1 = 0;
for ($i = 0; $i < 100; $i++) {
   $num = rand(0,1);
   if($num == 0){
      $count++;
      echo 'H';
      if($count == 3 ){
      break;
      }
   }
   elseif($num == 1){
      $count1++;
      echo 'S';
   }
}
echo'<br>';
echo "Herbas buvo ismestas : $count kartus";
echo'<br>';
echo "Skaicius buvo ismestas : $count1 kartus";

echo '<h2>c)</h2>';
$times = 1000;
for ($i = 1; $i <= $times; $i++) {
   $num = rand(0,1);
   if($num == 0){
      echo 'H';
      if($num[$times] === $num[$times+1] && $num[$times] === $num[$times-1]) {
      break;
      }
   }
   elseif($num == 1){
      echo 'S';
   }
}
?>
<b><h1>7.--------------------------------------</h1></b>
<?php
$CountPetras = 0;
$CountKazys = 0;

while ( $CountKazys < 222 || $CountPetras < 222) {
$PetrasPoints = rand(10,20);
$KazysPoints = rand(5,25);
$Kazys = 'Kazys';
$Petras = 'Petras';
   echo "$Kazys : $KazysPoints, $Petras : $PetrasPoints";
   if ($PetrasPoints < $KazysPoints){
      echo'<br>';
      echo "Partija laimejo $Kazys";
      echo'<br>';
      $CountKazys += $KazysPoints;
     
   }
   elseif($PetrasPoints > $KazysPoints){
      echo'<br>';
      echo "Partija laimejo $Petras";
      echo'<br>';
      $CountPetras += $PetrasPoints;

      }
   elseif($PetrasPoints == $KazysPoints){
      echo'<br>';
      echo 'Lygiosios';
      echo'<br>';
   }
}

if ($CountKazys > $CountPetras){
   $winner = $Kazys;
}
if ($CountKazys < $CountPetras){
   $winner = $Petras;
}
echo "Nugaletojas yra: $winner";
echo '<br>';
echo 'Petro taskai '.$CountPetras;
echo '<br>';
echo 'Kazio taskai '.$CountKazys;
?>

<b><h1>8.--------------------------------------</h1></b>
<span class = whiteSpace>
<?php
//ne rombas
$times = 21;
$star = str_repeat(' ', 3).$z;
$rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
for ($a = 1; $a <= $times; $a++) {
   echo '<br>';
   for ($x = 1; $x <= $times - $a; $x++) 
   echo " "; 
   for ($x = 1; $x <= $times; $x++) {
       echo '<font color="rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.73)">'.$star.'</font>';
   }
}
echo '<br>';
echo '<br>';
$height = 21;
$left = $right = $height / 2;
$stars = 1;
for($i = 1; $i <= $height; $i++) {
   echo str_repeat('&nbsp&nbsp', $left);
    for($x = 1; $x <= $stars; $x++) echo '<a style=\'color: rgb('. rand(0,255) .','. rand(0,255) .','. rand(0,255) .')\'>*</a>';
    echo str_repeat('&nbsp&nbsp', $right);
    $i <= $height / 2 ? $left-- : $left++;
    $i <= $height / 2 ? $stars += 2 : $stars -= 2;
    $i <= $height / 2 ? $right-- : $right++;
    echo '<br>';
}
?>
</span>
<b><h1>9.--------------------------------------</h1></b>
<?php
$time_start = microtime(true);
// prasukimas 1000000 kartu
$c = "10 bezdzioniu suvalge 20 bananu.";
for ($x = 0; $x <= 1000000; $x++) {
   $c;
}
$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Did 1000000 times in $time seconds\n";
echo '<br>';

$time_start = microtime(true);
// prasukimas 1000000 kartu
$c = '10 bezdzioniu suvalge 20 bananu.';
for ($x = 0; $x <= 1000000; $x++) {
   $c;
}
$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Did 1000000 times in $time seconds\n";
?>
<b><h1>10.--------------------------------------</h1></b>
<?php
$tack_lenght = 8.5;
$tack = 5;
$smugiai = 0;
$smugiu_kelias = 0;


echo '<h2>a)</h2>';

while ($smugiu_kelias <= $tack*$tack_lenght ) {
   $vienas_smugis = rand(5, 20)/100;
   $smugiu_kelias += $vienas_smugis;
   $smugiai++;
}
echo "buvo tiek smugiu: $smugiai";
echo '<br>';
echo '<h2>5)</h2>';
$tack1_lenght = 8.5;
$tack1 = 5;
$smugiai1 = 0;
$smugiu_kelias1 = 0;

while ($smugiu_kelias1 <= $tack1*$tack1_lenght ) {
   $vienas1_smugis = rand(20, 30)/100;
   $tikimybe = rand(0,1);
   if($tikimybe == 0){
   $smugiu_kelias1 += $vienas_smugis;
   }
   if($tikimybe == 1){
      $smugiu_kelias1 += 0;
      }
   $smugiai1++;
}
echo "buvo tiek smugiu: $smugiai1";

?>
<b><h1>11.--------------------------------------</h1></b>
<?php

$kazkas = substr(str_shuffle(str_repeat(implode('',range('A', 'Z')),3)),0,3);
echo $kazkas;
echo '<br>';
$kazkas1 = implode('',range(1, 200));
echo $kazkas1;
echo '<br>';

$numbers = range(1, 200);
$howManyNumbers = 50;
shuffle($numbers);
foreach ($numbers as $number) {
      // echo "$number ";
};

?>
</span>
