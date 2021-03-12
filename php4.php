<?php

function tab() {
$position = 0;
$greatThan = 0;
$size = readline("Veuillez entrer le taille du tableau : ");

for($i = 0; $i < $size; $i++) {
    $valeur = readline ("Veuillez saisir une valeur : ");
    $tab[$i] = $valeur;

    if($greatThan < $valeur) {
        $greatThan = $valeur;
    }

    elseif ($greatThan > $valeur) {
        $position = $position + 1 ;
    }
    print_r($tab );
}

echo"Le plus grand nombre est : $greatThan \n";
    echo"Il est en position n° : $position";
}

tab();

