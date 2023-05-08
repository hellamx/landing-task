<?php

namespace app;

class Subscribe 
{

    public static function validate($email)
    {

        if (mb_strlen($email) < 3 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Неккоректно заполнен Email';
        }
        
        return false;

    }
    
}