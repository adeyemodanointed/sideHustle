<?php
    for($i=0; $i < 4; $i++){
        $calc = $i;
        $x = 10;
        $y = 2;
        
        switch($calc){
            case 0:
                echo "Addition gives: ";
                echo ( $x * $y . "<br>");
                break;

            case 1:
                echo "Subtraction gives: ";
                echo ($x - $y . "<br>");
                break;

            case 2:
                echo "Division gives: ";
                echo ($x / $y . "<br>");
                break;

            case 3:
                echo "Multiplication gives: ";
                echo ($x * $y);
                break;
        }
    }
?>