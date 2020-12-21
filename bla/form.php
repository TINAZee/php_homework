<form action="" method="POST">

<input type="text" name="x" value="<?= $_POST['x'] ?? '' ?>"><br>
<input type="text" name="y" value="<?= $_POST['y'] ?? '' ?>"><br>

<input type="checkbox" name="c1" value="5">
<input type="checkbox" name="c2" value="5">

<input type="radio" name="r" value="1">
<input type="radio" name="r" value="2">
<input type="radio" name="r" value="3">

<textarea name="tx"></textarea>

<input type="file" name="file">

<input type="hidden" name="hid" value="aaa">

<input type="range" name="dd" id="">
<input type="password" name="pass">

<button type="submit">SUMUOTI</button>

</form>

<?php

if (!empty($_POST)) {

    $rez = (float)($_POST['x'] ?? 0) + (float)($_POST['y'] ?? 0);

    header('Location: http://localhost/bla/form/forma.php');
    die;


    // echo $rez;
}

