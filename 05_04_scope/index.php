<?php

    function double( &$a) {
        return $a = $a + 2;
    }

    $a = 5;
    echo double($a).'<br>';

    echo $a.'<br>';
    $b = &$a;

    $b = 8;

    echo $a.'<br>';

?>