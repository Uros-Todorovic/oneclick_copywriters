<?php

class Helper {

    public static function redirect($location){
        header("Location: {$location}");
    } 

    public static function not_signed_in($session){
        if (!$session->is_signed_in()) {
            self::redirect("login.php");
        } 
    }

    
}