<style>
html  {
 background-color: blue;
}
a {
 color: white;
}
</style>

<a href="?b">Change color into red</a>

<?php

if(isset($_GET['b'])){

    header('Location: http://localhost/BIT_KURSAI_PHP/Pirmas/hw7/5/red.php');
}

?>