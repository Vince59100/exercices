<?php 

function add() {

$size = readline ("Veuillez entrer la taille du tableau : "); 

for($i = 0; $i < $size; $i++) {
    $valeurs = readline("Veuillez entrer une valeur : ");
    $tab[$i] = $valeurs;
    $tab[$i] = $tab[$i] + 1;

    print_r($tab);
}
}

add();
