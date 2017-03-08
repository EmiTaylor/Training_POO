<?php

class personnage{
    // PARAMETERS
    private $nom;
    private $vie = 80;
    private $atk = 20;
    private static $max_vie = 120;

    // CALL CONSTRUCTOR
    public function __construct($nom){
        $this->nom = $nom;
    }
    // fonction qui permet d'afficher private nom
    public function getNom(){
        return $this->nom;
    }
    // fonction qui permet d'afficher private vie
    public function getVie(){
        return $this->vie;
    }
    public function getAtk(){
        return $this->atk;
    }

    // Methode crier
    // public function crier(){
    //     echo "JERONIMOOOOOOOOOOOOOOOOOOOOOOOOO";
    // }

    // Methode regenerer
    // public function regenerer($vie= null){
    //     if (is_null($vie)){
    //     $this->vie = 100;
    //     } else {
    //     $this->vie += $vie;
    //     }
    // }
    // 
    // DIE //
    public function mort(){
        return $this->vie <= 0;
    }
    //IF LIFE < 0//
    private function empecher_negatif(){
            if($this->vie < 0){
                $this->vie = 0;
            }
    }
    // ATK //
    public function attaque($cible){
    $cible->vie -= $this->atk;
    $cible->empecher_negatif();
    }
}
