<?php

class Magasins {

    public $Nom1 ='LeDev\'App';
    public $Adresse1 = '1 Rue du Pays';
    public $CodePostal1 = '12345';
    public $Ville1 = 'Ancien';

    public $Nom2 = 'Telipho';
    public $Adresse2 = '2 Rue du Tel';
    public $CodePostal2 = '67890';
    public $Ville2 = 'Ici';
    
    public $Nom3 = 'LaDev\'DuMonde';
    public $Adresse3 = '3 Rue du Monde';
    public $CodePostal3 = '10111';
    public $Ville3 = 'Loin';

    // public function getNom1(){
    //     return $this->Nom1;
    // }
    // public function getAdresse1(){
    //     return $this->Adresse1;
    // }
    // public function getCodePostal1(){
    //     return $this->CodePostal1;
    // }
    // public function getVille1(){
    //     return $this->Ville1;
    // }
    // public function getNom2(){
    //     return $this->Nom2;
    // }
    // public function getAdresse2(){
    //     return $this->Adresse2;
    // }
    // public function getCodePostal2(){
    //     return $this->CodePostal2;
    // }
    // public function getVille2(){
    //     return $this->Ville2;
    // }
    // public function getNom3(){
    //     return $this->Nom3;
    // }
    // public function getAdresse3(){
    //     return $this->Adresse3;
    // }
    // public function getCodePostal3(){
    //     return $this->CodePostal3;
    // }
    // public function getVille3(){
    //     return $this->Ville3;
    // }

    public function Restauration(){
        if ($this->Nom3 === true) {
            $this->Nom1 = false;
            $this->Nom2 = false;
            return 'Restaurant';
        } else {
            $this->Nom1 = true;
            $this->Nom2 = true;
            return 'Ticket Repas';
        }
    }

    // private $resto;
    // private $ticketResto;

    // public function modeResto(){
    //     if ($this->resto === true){
    //         $this->ticketResto = false;
    //         return 'Restaurant d\'entreprise disponible ';
    //     }else{
    //         $this->ticketResto = true;
    //         return 'Restaurant d\'entreprise indisponible, mise à disposition de tickets restaurants';
    //     }

    // }

    
}
?>