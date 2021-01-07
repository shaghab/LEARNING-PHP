<?php

    function is_plaindrome( $string) {
        $reverse = strrev($string);
        return $string == $reverse;
    }

    echo is_plaindrome('Hello').'<br>';
    echo is_plaindrome('ala').'<br>';
    echo is_plaindrome('alla').'<br>';
    echo is_plaindrome('welcome').'<br>';
 

?>