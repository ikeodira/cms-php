<?php

function getDB(){
    $db_host = "localhost";
    $db_name = "cms";
    $db_user = "cms_www";
    $db_pass = "j!W7R71b416AK0)X";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}

