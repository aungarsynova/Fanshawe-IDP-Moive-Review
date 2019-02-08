<?php
//Redirec to a correct location
    function redirect_to($location){
        if($location != NULL){
            header('Location: '.$location);
            exit;
        }
    }
?>