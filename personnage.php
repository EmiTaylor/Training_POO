<?php
class personnage
{
    public $nom;
    public $vie = 60;
    public $attaque = 20;
    public $experience = 30;
//methode regenerer //
    public function regenerer($vie=null)
    {
        if(is_null($vie))
        {
            $this->vie = 100;
        }
        else
        {
            $this->vie += $vie;
        }
    }
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function mort()
    {
//si la vie du perso egal zero mort//
        return $this->vie <= 0;
    }
    public function attaque()
    {
    $cible->vie -=  $this->atk;
    }

}
