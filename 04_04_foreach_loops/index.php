<?php
    $colors =array ('red', 'blue', 'green');

    foreach($colors as $clr) {
        echo $clr.'<br>';
    }

    $home_towns = array (
        'asim' => 'islamabad',
        'usman' => 'lahore',
        'umair' => 'karachi',
    );

    foreach($home_towns as $key => $value) {
        echo "<p>$key lives in $value</p>";
    }


?>