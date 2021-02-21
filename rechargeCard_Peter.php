<?php
    for($i=0; $i<200; $i++){
        echo ("Recharge pin " . $i+1 . " => ");
        echo(rand(100000000000, 999999999999) . "<br>");
    }
?>