
<br>
<form action=""method="get"></form>
<button type="submit" >GET</button>
</form>

<form action=""method="post">
<button type="submit">POST</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo '<style>html{background:green;}</style>';
   echo 'POST METODAS';
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<style>html{background:yellow;}</style>';
    echo 'GET METODAS';
 }
?>
