<?php
// Appel des fichier
require 'Personnage.php';
require 'Archer.php';
// initialisation des objets
$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer('Legolas');
//affiche les objets leurs parametres et methodes
var_dump($merlin, $harry, $legolas);







// Attaque de merlin sur harry
// $merlin->attaque($harry);

// Si harry est mort afficher mort sinon il a survecu avec n px
// if ($harry->mort())
//     {
//     echo 'Harry est mort :(';
//     }
//     else
//     {
//         echo 'Harry a survecu avec' . $harry->vie . 'pv';
//     }

// Appel de la methode regenerer pour harry
// $harry->regenerer();
