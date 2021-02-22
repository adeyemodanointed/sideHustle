<?php

    $calculate = 1;

    switch($calculate) {
        case 1:
            echo "This is for addition, input two numbers";
            $a = rtrim(fgets(STDIN));
            $b = rtrim(fgets(STDIN));
            echo("Sum of numbers is: $a + $b");

    }
?>