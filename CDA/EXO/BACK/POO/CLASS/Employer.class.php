<?php

    /// Crétaion d'une clss Employe{}
    class Employe{

        //Variable de la class (objet)
        private $Nom;
        private $Prenom;
        private $Poste;
        private $Service;
        private $Salaire;
        private $DateEmbauche;
        private $Enfant;
        private $Age;

        
        //Entrer une valeur dans la variable private
        public function setInfo($_Nom, $_Prenom, $_DateEmb, $_Poste, $_SalEuro, $_Service, $_Enfant, $_Age){
            $this->Nom = $_Nom;
            $this->Prenom = $_Prenom;
            $this->DateEmbauche = $_DateEmb;
            $this->Poste = $_Poste;
            $this->Salaire = $_SalEuro;
            $this->Service = $_Service;
            $this->Enfant = $_Enfant;
            $this->Age = $_Age;
        }

        // Retourne une valeur private
        public function getNom(){
            return $this->Nom;
        }
        public function getPrenom(){
            return $this->Prenom;
        }
        public function getDateEmb(){
            return $this->DateEmbauche;
        }

        public function getPoste(){
            return $this->Poste;
        }
        public function getSalaire(){
            return $this->Salaire;
        }
        public function getService(){
            return $this->Service;
        }
        public function getEnfant(){
            return $this->Enfant;
        }
        public function getAge(){
            return $this->Age;
        }


        // Calcule depuis combien d'année un eployé est dans l'entreprise
        public function Anciennete()
        {
            $dateEmbauche = date_create($this->DateEmbauche); // On crée une date a partir de l'objet entré
            $dateJ = date_create(date("d-m-Y")); // On créeune variable qui donne la date d'aujourd'hui
            $diff = date_diff($dateEmbauche, $dateJ); // On fait le calcule grâce à date_diff
            $année = (int)$diff->format("%Y"); // on initialise le bon format (en années)
            return $année; // on retourne la valeur de la fonction
        }

        // Méthode pour calculer le montant de la prime et l'ordre de transfère.
        public function Prime(){
            $prime = $this->Salaire - ($this->Salaire*(95/100));// On calcule 5% du salaire
            $anc = ($this->Salaire - ($this->Salaire*(98/100)))*$this->Anciennete(); // On calcule 2 du salaire sur le nombre d'année d'ancienneté
            $Prime = $prime + $anc; // On additionne le tout
            // $Prime = ($this->Salaire/12)+$Prime; // Puis on l'ajoute à 12 mois de salaire
            return $Prime;
        }

        // Message pour la Prime
        public function Transfere(){
            $dateJ = date_create(date("d-m")); // '30-11'; // On crée une variable qui donne la date d'aujourd'hui
            if ($dateJ == '30-11'){
                $message = 'Transfère à ' . $this->Nom . ' ' . $this->Prenom . ', Prime de ' . $this->Prime() . '.'; // Si la date est le 30-11 alors la banque à un message de transfere de la prime
            } else {
                $message = 'Aucun transfère de prime à cette date ! '; // Sinon aucun transfere n'est effectuer
            }
            return $message;
        }
        /**********************************************************************************************************/
        // Verfication message pour transfére de la prime
        public function Transfer1(){
            $dateJ =  '30-11'; // On crée une variable qui donne la date d'aujourd'hui
            if ($dateJ == '30-11'){
                $message = 'Transfère à ' . $this->Nom . ' ' . $this->Prenom . ', Prime de ' . $this->Prime() . '.'; // Si la date est le 30-11 alors la banque à un message de transfere de la prime
            } else {
                $message = 'Aucun transfère de prime à cette date ! '; // Sinon aucun transfere n'est effectuer
            }
            return $message;
        }
        /**********************************************************************************************************/

        // Fonction sur les chèques-vacances
        public function Vacance(){
            if ($this->Anciennete() >= 1){
                return 'Chèques-Vancances';
            } else {
                return 'Aucun chèques-Vacances';
            }
        }

        // Fonction sur les chuèques Noël
        public function Droit(){
            if($this->Enfant != 0){
                return 'L\'employer a droit au chèques Noël !';
            } else {
                return 'L\'employer n\'a pas le droit au chèques Noël !';
            }
        }
        public function Noël() {
            if ($this->Age != 0){
                $age = explode(',', $this->Age);
                $total = 0;
                $cheque = 0;
                $cheque20 = 0;
                $cheque30 = 0;
                $cheque50 = 0;
                foreach ($age as $a){
                        if($a>=0 && $a <=10) {
                            $total+=20;
                            $cheque = $cheque + 1;
                            $cheque20 = $cheque20 + 1;
                        }else if ($a>=11 && $a<=15){
                            $total+=30;
                            $cheque = $cheque + 1;
                            $cheque30 = $cheque30 + 1;
                        }else if ($a>=16 && $a<=18){
                            $total+=50;
                            $cheque = $cheque + 1;
                            $cheque50 = $cheque50 + 1;
                        }
                    }
                return 'Nbrs de chèque : ' . $cheque . '. Total : ' . $total . '€. Chèque(s) de : ' . $cheque20 . ' chèque(s) de 20€; ' . $cheque30 . ' chèque(s) de 30€; ' . $cheque50 . ' chèque(s) de 50€.';
            } 
            else {
                return 'Aucun enfant(s) à chage !';
            }
        }

    }
?>