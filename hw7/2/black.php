
<style>
html  {
 background-color: black;
}
a {
 color: white;
}
</style>

<?php

if (isset($_GET['color'])) {
    echo '<style>html{background:#'.$_GET['color'].';}</style>';
}
?>
<a href='?'>Nuoroda i save</a><br>