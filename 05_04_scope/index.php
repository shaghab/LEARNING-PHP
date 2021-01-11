<?php

    function double( &$a) {
        return $a = $a ** 2;
    }

    $a = 5;
    echo double($a).'<br>';

    echo $a.'<br>';
    $b = &$a;

    $b = 8;

    echo $a.'<br>';

    $numbers = array (1,2,3,4);

    foreach( $numbers as &$number) {
        double($number);
    }

    echo '<pre>';
    print_r ($numbers);
    echo '</pre>';

?>