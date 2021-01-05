<?php

    $brothers = array (
        'Joe' => array(
            'age' => 34,
            'job' => 'teacher',
        ),
        'Hanna' => array(
            'age' => 27,
            'job' => 'trainer',
        ),
        'Rob' => array(
            'age' => 31,
            'job' => 'photographer',
        ),

    );

    echo '<pre>';
    print_r ($brothers);
    echo '</pre><br>';


    echo $brothers['Hanna']['age'];

?>