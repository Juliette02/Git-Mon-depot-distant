<?php

    class Personnage{
        
        // Création d'une classe personnage!
        
        private $Nom; // Variable stocké en privée
        private $Prenom; // ...
        private $Age; // ...
        private $Sexe; // ...

        public function getNom(){
            return $this->Nom;
        }

        public function getPrenom(){
            return $this->Prenom;
        }

        public function getAge(){
            return $this->Age;
        }

        public function getSexe(){
            return $this->Sexe;
        }
        
        // public function get...() permet de retourner la valeur d'une variable private 

        public function setInfo($_nom, $_prenom, $_age, $_sexe){
            $this->Nom = $_nom;
            $this->Prenom = $_prenom;
            $this->Age = $_age;
            $this->Sexe = $_sexe;
        }

        // public function setInfo(...) initialise dles valeur pour leur en affecter des nouvelles après $p = new Personnage();

    }
?>