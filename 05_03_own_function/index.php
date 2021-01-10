<?php

    function is_plaindrome( $string) {

        $string = strtolower($string);
        $string = str_replace (' ', '', $string);

        $reverse = strrev($string);
        return $string == $reverse;
    }

    echo '<pre>';
    echo var_dump( is_plaindrome('Hello'));
    echo var_dump(is_plaindrome('ala'));
    echo var_dump(is_plaindrome('alla'));
    echo var_dump(is_plaindrome('welcome'));
    echo '</pre>';
?>
