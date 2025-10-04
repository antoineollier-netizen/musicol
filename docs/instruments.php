<?php

//récupèration de l'ensemble des instruments proposés 
include_once('modele/mod_bdd.php');
$lesInstruments = get_lesInstruments() ;


// affichage de  la  vue associée 
include_once('vue/vue_instruments2.php');
?>
