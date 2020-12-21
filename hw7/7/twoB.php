
<a href ="?">linkas i save</a>
<br>
<form>
<button type="submit" name="GET" >GET</button>
</form>
<form>
<button type="submit"name="POST">POST</button>
</form>

<?php
if(empty($_GET['GET'])){
   echo '<style>html{background:green;}</style>';
}
if(isset($_GET['POST'])){
    echo '<style>html{background:yellow;}</style>';
 }
?>
