document.getElementById("inscription").addEventListener("submit", function(e){
    e.preventDefault();
        // 1er fieldset

    var envoie ="";
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("Prénom");
    var sexe = document.getElementsByName("sexe");
    var dateN = document.getElementById("date");
    var Cp = document.getElementById("Code_postal");
    var mail = document.getElementById("mail");

    var n = /^[a-zA-Z\-]+$/;
    var z = /^[0-9]{5}$/;
    var m = /^([a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-\.]+\.[a-z]{3,5})$/;
    var d =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;

        //1er fieldset

    

    if (nom.value==""){
        E1 = "Veuillez entrez votre Nom, s'il-vous-plait!";
    } else if (!n.test(nom.value)){
        E1 = "Veuillez renseignez corretement votre Nom, s'il-vous-plait!";
    } else {
        E1 = "";
    }
    document.getElementById("E1").innerHTML = E1;//...........Version simplifier...........//

    if (prenom.value==""){
        E2 = "Veuillez entrez votre Prénom, s'il-vous-plait!";
    } else if (!n.test(prenom.value)) {
        E2 = "Veuillez renseignez corretement votre Prénom, s'il-vous-plait!";
    } else {
        E2 = "";
    }
    document.getElementById("E2").innerHTML = E2;//...........Version simplifier...........//


    //Pour les bouton radio//

    for (i=0; i < sexe.length; i++){
        if (sexe[i].checked == true){
            var frequence = 1;
            break;
        }
    }
    if (frequence == 1){
        E3 = document.getElementById("E3").innerHTML = "";
    } else {
        E3 = "Veuillez selectionner votre Sexe, s'il-vous-plait!";
        E3 = document.getElementById("E3").innerHTML = E3;
    }

    //Pour les dates de type="text//

    if (!d.test(dateN.value)){
        E4 = "Veuillez entrez votre Date de Naissance, s'il-vous-plait!";
        E4 = document.getElementById("E4").innerHTML = E4;
    } else {
        E4 = document.getElementById("E4").innerHTML = "";
    }
    if (!z.test(Cp.value)){
        E5 = "Veuillez entrez votre Code Postal, s'il-vous-plait!";
        E5 = document.getElementById("E5").innerHTML = E5;
    } else {
        E5 = document.getElementById("E5").innerHTML = "";
    }
    if (!m.test(mail.value)){
        E6 = "Veuillez entrez votre E-Mail, s'il-vous-plait!";
        E6 = document.getElementById("E6").innerHTML = E6;
    } else {
        E6 = document.getElementById("E6").innerHTML = "";
    }

        // 2e fieldset

    var sujet = document.getElementById("sujet");
    var question = document.getElementById("quest");

    if (sujet.value == ""){
        E7 = "Veuillez selectionner un sujet, s'il-vous-plait!";
        E7 = document.getElementById("E7").innerHTML = E7;
    } else {
        E7 = document.getElementById("E7").innerHTML = "";
    }

    if (!question.value){
        E8 = "Veuillez entrez votre Question, s'il-vous-plait!";
        E8 = document.getElementById("E8").innerHTML = E8;
    } else {
        E8 = document.getElementById("E8").innerHTML = "";
    }

        //Acceptation

    var accept = document.getElementById("accept");

    if (accept.checked == false){
        E9 = "Veuillez accepter le traitement de ce formulaire, s'il-vous-plait!";
        E9 = document.getElementById("E9").innerHTML = E9;
    } else {
        E9 = document.getElementById("E9").innerHTML = "";
    }

    if (E1+E2+E3+E4+E5+E6+E7+E8+E9 != "") { 
        e.preventDefault();
        envoie = document.getElementById("envoie").innerHTML = "";
    } else {
        envoie = "Formulaire Envoyé !";
        envoie = document.getElementById("envoie").innerHTML = envoie;
        alert(envoie);
    }
})