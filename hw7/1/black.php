<style>
html  {
 background-color: black;
}
a {
 color: white;
}
</style>

<a href ="?">linkas i save</a>
<br>
<a href="?color=1">linkas su GET</a>

<?php
if(isset($_GET['color'])){
    if($_GET['color']==1){echo '<style>html{background:red;}</style>';}
}
?>
