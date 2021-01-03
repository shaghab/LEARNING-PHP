<?php

// Indexable Array
$colors = array ('Red', 'Blue', 'Green');

print_r( $colors );

echo '<br>' . $colors[0] . '<br>';

@$colors[] = 'yellow';

print_r( $colors );


?>
