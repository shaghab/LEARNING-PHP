<?php
    $i = 10;

    do {
        
        //echo '<p>'.$i++.'</p>';

    } while ($i < 10);

    for($i = 0 ; $i < 10; $i++) {
        //echo '<p><b>'.$i.'</b></p>';
    }

    $colors = array ('red', 'blue', 'green' , 'yellow', 'white');

    for($i = 0 ; $i < sizeof($colors); $i++) {
        echo '<p><b>'.$colors[$i].'</b></p>';
    }

?>