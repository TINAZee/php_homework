<h1>HELLO</h1>
.....

<!-- pradeti php -->
<?php

// kintamojo susikurimas
$bla = 1 + 5;

//spausdinimas
echo 'LABAS';
echo $bla;

//hmtl pradejimas(ne php uzbaigimas, nes galima nauja pradeti)
?>


<h1>Byeee</h1?

<?php

$bla = 1 + 5;

echo 'LABAS';
echo $bla;

?>

<div>
....Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
 “Laimėjo: laimėtojo vardas”;
Taškų kiekį generuokite funkcija rand();<br><br><br><br><br><br>
</div>


<?php

$jonas = rand(5,25);
$petras = rand(10,20);

echo "Jonas: $jonas Petras: $petras <br>";

if ($jonas > $petras) {
    echo 'Jonas kietas';
}
elseif($jonas < $petras) {
    echo 'Petras kietas';
}
else{
    echo 'abu miksti';
}