<?php
    $i = 0;
    $j = 1;

    while ($i<200) {
        echo "$i<br>";
        $k = $i + $j;
        $i = $j;
        $j = $k;

    }