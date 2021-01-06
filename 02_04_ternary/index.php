<?php
    if (5 < 4) {
        echo '5 is bigger than 4<br>';
    } else if (4 > 3) {
        echo '4 is bigger than 3<br>';
    } else {
        echo 'nothing is true<br>';

    }
    echo 'out of ... <br>';

    $is_logged_in = true;

    if ($is_logged_in):
        echo "User is logged in<br>";
    else:
        echo "User is not logged in<br>";
    endif;

    $message = $is_logged_in?"Welcome back":"Hello there";

    echo $message;

?>