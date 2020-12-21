<style>
html  {
 background-color: red;
}
a {
 color: white;
}
</style>

<a href="?r">Change color into blue</a>

<?php

if(isset($_GET['r'])){

    header('Location: http://localhost/BIT_KURSAI_PHP/Pirmas/hw7/5/blue.php');
}

?>