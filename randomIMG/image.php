<?php
    session_start();
    function getImage() {
        $img = ['img_1.jpg', 'img_2.jpg', 'img_3.jpg','img_4.jpg','img_5.jpg'];
        shuffle($img);
        foreach($img as $key => $val) {
            if (!is_array($_SESSION['img'])) {
                return $val;
            } elseif (count($_SESSION['img']) >= count($img)) {
                $_SESSION['img'] = array();
            }
            if (is_array($_SESSION['img']) && !in_array($val, $_SESSION['img'])) {
                return $val;
            }
        }
    }
?>