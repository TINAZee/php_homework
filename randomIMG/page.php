<?php
    include 'image.php';
        $currImg = getImage();
        $_SESSION['img'][] = $currImg;
    
?>
 <img src="<?$currImg ?>" />