<?php
    $title = 'Learning PHP Template';
    $description = 'Server Side Includes are cool!';
    $author = 'Joe Casabona';
?>

<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <small>By: <?php echo $author; ?></small>
    </body>
</html>
