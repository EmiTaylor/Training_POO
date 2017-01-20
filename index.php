<?php
require 'personnage.php';

$merlin = new personnage("MerlinLenchanteur");
$merlin->regenerer(5);



$harry = new personnage("HarryPotter");
// $harrypotter-> vie = -20;
// $harrypotter->mort();

$merlin->attaque($harry);


if ($harry->mort())
{
    echo "HarryPotter est mort";
}
else
{
    echo "HarryPotter à survécu";
}
