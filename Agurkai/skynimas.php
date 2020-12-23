<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}
//SKINTI SCENARIJUS
if (isset($_POST['skinti'])) {
    foreach($_SESSION['a'] as $index => &$agurkas) {
        $agurkas['agurkai'] -= $_POST['kiek_skinti'];
        print_r($_POST);
    }

    header('Location: http://localhost/BIT_KURSAI_PHP/Pirmas/Agurkai/skynimas.php.');
    exit;
   
}


//SKINTI VISUS SCENARIJUS
//NUIMTI VISA DERLIU SCENARIJUS

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skynimas</title>
</head>
<body>
<h1>Agurkų sodas</h1>
<h3>Agurkų skynimas</h3>
    <form action="" method="post">
    <?php foreach($_SESSION['a'] as $agurkas): ?>
    <div>
    Agurkas Nr. <?= $agurkas['id'] ?>
    <p style="display:inline;">Galima skinti</p>
    <h1 style="display:inline;"><?= $agurkas['agurkai'] ?></h1>
    <input type="text" name="kiek_skinti">
    <button type="submit" name="Skinti">Skinti</button>
    <button type="submit" name="Skinti visus">Skinti visus</button>
    </div>
    <?php endforeach ?>
    <button type="submit" name="NuimtiDerliu">Nuimti visą derlių</button>
    </form>
</body>
</html>
