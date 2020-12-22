<?php
session_start();

// $value = 'something from somewhere';

// setcookie("TestCookie1", $value);
// setcookie("TestCookie2", $value, time()+3600, '/');  /* expire in 1 hour */
// setcookie("TestCookie3", $value, time()+3600, "/~rasmus/", "example.com", 1);

$counter = $_SESSION['save_place'] ?? 0;

$counter++;

echo $counter;

$_SESSION['save_place'] = $counter;