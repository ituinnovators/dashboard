<?php
class PasswordComponent extends Object {

/**
 * Password generator function
 *
 */
    function generatePassword ($length = 8){
        // inicializa variables
        $password = "";
        $i = 0;
        $possible = "0123456789bcdfghjkmnpqrstvwxyz";

        // agrega random
        while ($i < $length){
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $password .= $char;
            $i++;
        }
        return $password;
    }
}
?>