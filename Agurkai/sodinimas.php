<?php


session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}

// SODINIMO SCENARIJUS
if (isset($_POST['sodinti'])) {
    $_SESSION['a'][] = [
        'id' => ++$_SESSION['agurku ID'],
        $img = ['img_1.jpg', 'img_2.jpg', 'img_3.jpg','img_4.jpg','img_5.jpg'],
        'img' => $img[array_rand($img)],
        'agurkai' => 0
    ];
    header('Location:http://localhost/BIT_KURSAI_PHP/Pirmas/Agurkai/sodinimas.php');
    die;
}
// ISROVIMO SCENARIJUS
if (isset($_POST['rauti'])) {
    foreach($_SESSION['a'] as $index => $agurkas) {
        if ($_POST['rauti'] == $agurkas['id']) {
            unset($_SESSION['a'][$index]);
            header('Location: http://localhost/BIT_KURSAI_PHP/Pirmas/Agurkai/sodinimas.php');
            die;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodinimas</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1>Agurkų sodas</h1>
<h3>Sodinimas</h3>
    <form action="" method="post">
    <?php foreach($_SESSION['a'] as $agurkas): ?>

    <div id = main>
    <td><img class="img" src="<?= $agurkas['img'] ?>" alt="agurkas">
    Agurkas nr. <?= $agurkas['id'] ?>
    Agurkų: <?= $agurkas['agurkai'] ?>
    <button type="submit" name="rauti" value="<?= $agurkas['id'] ?>">Išrauti</button>
    </div>

    <?php endforeach ?>
    <button type="submit" name="sodinti">SODINTI</button>
    </form>
</body>
</html>