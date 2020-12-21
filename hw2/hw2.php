<b><h1>1.--------------------------------------</h1></b>
<?php
$pirmas = 'Julia Roberts';
$antras = 'Johnny Depp';

if(strlen($pirmas) > strlen($antras)) {
    echo $pirmas; 
}
else {
    echo $antras;
}
?>
<b><h1>2.--------------------------------------</h1></b>
<?php

$one = 'Julia Roberts';
$two = 'Johnny Depp';

$pieces = explode(" ", $one);


$a=strtoupper($pieces[0]);
$b = strtolower($pieces[1]);

$one = "$a $b";

$pieces = explode(" ", $two);

$a=strtoupper($pieces[0]);
$b = strtolower($pieces[1]);

$two = "$a $b";

echo "$one<br>$two";

?>
<b><h1>3.--------------------------------------</h1></b>
<?php

$one = 'Julia Roberts';
$two = 'Johnny Depp';

$pieces = explode(" ", $one);
$three = $pieces[0][0].$pieces[1][0];

$pieces = explode(" ", $two);
$four= $pieces[0][0].$pieces[1][0];

echo "$three<br>$four";

?>
<b><h1>4.--------------------------------------</h1></b>
<?php

$one = 'Julia Roberts';
$two = 'Johnny Depp';

$pieces = explode(" ", $one);
$three = substr($pieces[0],-3).'    '.substr($pieces[1],-3);

$pieces = explode(" ", $two);
$four= substr($pieces[0],-3).'    '.substr($pieces[1],-3);

echo "$three<br>$four";

?>
<b><h1>5.--------------------------------------</h1></b>
<?php

$re = '/[aA]/m';
$str = 'An American in Paris';

echo preg_replace($re, '*', $str);

?>
<b><h1>6.--------------------------------------</h1></b>
<?php

$re = '/[aA]/m';
$str = 'An American in Paris';


$str = str_replace('a', "", $str, $count);
$str = str_replace('A', "", $str, $count1);
echo $count+$count1;


//spec funkcija skaiciavimui;
$string1 = 'An American in Paris';
echo substr_count(strtolower($string1), 'a');
?>
<b><h1>7.--------------------------------------</h1></b>
<?php

$str1 = "Breakfast at Tiffany's";
$str2 = '2001: A Space Odyssey';
$str3 = "It's a Wonderful Life";
$str = 'An American in Paris';

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", $str);
echo $onlyconsonants;
echo '<br>';
$onlyconsonants = str_replace($vowels, "", $str1);
echo $onlyconsonants;
echo '<br>';
$onlyconsonants = str_replace($vowels, "", $str2);
echo $onlyconsonants;
echo '<br>';
$onlyconsonants = str_replace($vowels, "", $str3);
echo $onlyconsonants;
echo '<br>';

//su regex

$breakfast = 'Breakfast at Tiffany\'s';
echo preg_replace('/[aoeiu]/i', '', $breakfast), "<br>";

?>
<b><h1>8.--------------------------------------</h1></b>
<?php
$str = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $str . '<br>';
echo 'Episodas: ' . preg_replace('/[^0-9]/',$str);

?>
<b><h1>9.--------------------------------------</h1></b>
<?php
$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string1 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$pieces = explode(" ", $string);

foreach ($pieces as $key=>&$value) {
    if (strlen($value) <= 5) {
        unset($pieces[$key]);
    }
}

echo count($pieces);
?>
<b><h1>10.--------------------------------------</h1></b>
<?php

$length = 3;
$characters = 'abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
echo $randomString;


// vienos eilutes random raidziu kodas

$kazkas = substr(str_shuffle(str_repeat(implode('',range('A', 'Z')),3)),0,3);
echo $kazkas;
?>
<b><h1>11.--------------------------------------</h1></b>
<?php

$length = 3;
$characters = 'abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$random_string = '';
$random_string1 = '';

for ($i = 0; $i < $length; $i++) {
    $random_string .= $characters[rand(0, $charactersLength - 1)];
}
for ($j = 0; $j < $length; $j++) {
    $random_string1 .= $characters[rand(0, $charactersLength - 1)];
}

$new_string = $random_string.' '.$random_string1;


for ($i = 0; $i < 5; $i++) {
    $new_string++;
    echo $new_string.' ';
}

$rez = $new_string.' '.$new_string.' '.$new_string.' '.$new_string.' '.$new_string.' ';
echo  $rez;


$unique=[];

while(count($unique)<10)
{
    $rand=rand(1,100);

    if(!in_array($rand,$unique))
    {
          $unique[]=$rand;

    }
    print_r($unique);
}


?>
