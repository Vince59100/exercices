<?php

function shtrouph()
{

    $shtrouph = 0;

    $tab1 = array(1, 2, 5, 5, 4);
    $tab2 = array(2, 4, 8, 7, 1);

    for ($i = 0; $i < 5; $i++) {
        $shtrouph = $shtrouph + $tab1[$i] * $tab2[$i];
    }
    echo"$shtrouph";
}

shtrouph();