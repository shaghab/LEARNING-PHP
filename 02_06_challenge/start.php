<?php
    $min = 1;
    $max = 50;
    $guess = 24; // Change this value to test!
    //$num = 16; // Change this value to test|

    $num = rand ($min, $max);

    echo $num;

    /*if($guess == $num):
        echo "<p>Your guess is correct</p>";
    elseif ($guess < $num):
        echo "<p>Your guess is lower</p>";
    else:    
        echo "<p>Your guess is higher</p>";
    endif;*/
?>


<p>Your guess is 
    <?php if($guess == $num):
            echo "correct";
        elseif ($guess < $num):
            echo "lower";
        else:    
            echo "higher";
        endif;
    ?>
</p>

<?php
    if($guess < $min || $guess > $max):
        echo "<p>Your guess is out of range</p>";
        exit();
    endif;
?>