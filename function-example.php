<?php

function getMessage($morning){
    if($morning){
        return "Good morning";
    }else {
        return "Good afternoon";
    }
}

 $message = getMessage(true);
 echo $message;