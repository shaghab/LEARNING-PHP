<?php

    include 'common\functions.php';
    include 'math.php';

    function double ($a) {
        return $a + 2;
    }

    //echo '<p>' . double (5) . '</p>';
    para_print (double(5));

    para_print (maths\double(5));

?>