<?php

function redirect($path){

    if(isset($_SERVER["HTTPS"]) && S_SERVER['HTTPS'] != 'off'){
        $protocol = "https";
    }else {
        $protocol = "http";
    }
   // header("Location: article.php?id=$id"); This is a relative url that works only newer browsers

    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . $path); // header("Location: article.php?id=$id"); This is an absolute url that works on all browsers
    exit;

}

?>