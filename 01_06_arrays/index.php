<?php

// Indexable Array
$colors = array ('Red', 'Blue', 'Green');

print_r( $colors );

echo '<br>' . $colors[0] . '<br>';

@$colors[] = 'yellow';

print_r( $colors );

// Associative Arrays

$home_towns = array(
    'Joe' => 'London',
    'Marry' => 'New York',
    'Anna' => 'Beijing',
);

echo '<pre>';
print_r ( $home_towns );
echo '</pre><br>';

echo $home_towns['Marry'];

?>
