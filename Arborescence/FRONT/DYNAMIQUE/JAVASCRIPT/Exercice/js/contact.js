document.getElementById("Coord").addEventListener("submit", function(e){
    e.preventDefault();

    var erreur = "";
    var societe = document.getElementById("societe");
    var contact = document.getElementById("contact");
    var Cp = document.getElementById("code_postal").value;
    var ville = document.getElementById("ville");
    var email = document.getElementById("e-mail");

    //Pour selectionner directement tout le formulaire : 

    /*var inputs = document.getElementsByTagName("input");
        
    //Traitement cas par cas (input unique)//
        if(inputs[email].value !== @){
            erreur = alert("Entrez l'addresse E-mail avec '@', s'il-vous-plait! ");
        }

    //Traintement générique//
        for (i=0; i<input.length; i++){
            if (!input[i].value){
                erreur = alert("Veuillez renseigner tous les champs");
            }
        }inputs
        if(erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    } else {
        alert("Formulaire Envoyé !")
    }

    //! Bien mettre une value au input: Envoyer/Annuler !
        */

    if (!societe.value){
        erreur = erreur + "\n Entrez la Société, s'il-vous-plait! "
    }
    if (!contact.value){
        erreur = erreur + "\n Entrez la personne à contacter, s'il-vous-plait! ";
    }

var N = /^[0-9]{5}$/;

    if (!N.test(Cp)){
        erreur = erreur + "\n Entrez le Code Postal sur 5 chiffres, s'il-vous-plait! ";
    }
    if (!ville.value) {
        erreur = erreur + "\n Entrez la ville, s'il-vous-plait! ";
    }

var Z = /^([a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-\.]+\.[a-z]{3,5})$/;

    if (!Z.test(email.value)) {
        erreur = erreur + "\n Entrez l'addresse E-mail avec '@', s'il-vous-plait! ";
    }
    if(!erreur=="") {
        e.preventDefault();
        //document.getElementById("erreur").innerHTML = erreur;
        alert(erreur);
        console.log(erreur);
        // Mettre un <p id="erreur"></p> dans le code HTML pour afficher dans le formulaire directement les erreur ! //
        return false;
    } else {
        
        alert("Formulaire Envoyé !");
    }

});