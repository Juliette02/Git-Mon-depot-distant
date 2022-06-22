document.getElementById("contact").addEventListener("submit", function(e){

    var envoie = "";
    var sujet = document.getElementById("sujet");
    var mail = document.getElementById("mail");
    var contenu = document.getElementById("contenu");

    var s = /^[a-zA-Z\s\D\d]+$/;
    var m = /^([a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-\.]+\.[a-z]{2,5})$/;
    var c = /^[a-zA-Z\s\d\à\é\'\"\/\-\^\&\â\ê\î\ô\û\ä\ë\ï\ö\ü\ç\(\)\è]+$/;

    // Champs

    if (sujet.value==""){
        E1 = "Veuillez entrez le sujet, s'il-vous-plait!";
    } else if (!s.test(sujet.value)){
        E1 = "Veuillez renseignez corretement le sujet, s'il-vous-plait!";
    } else {
        E1 = "";
    }
    document.getElementById("E1").innerHTML = E1;

    if(mail.value==""){
        E2 = 'Veuillez entrez votre addresse mail, s\'il-vous-plait!';
    } else if (!m.test(mail.value)){
        E2 = 'Veuillez entrez correctement votre e-mail, s\'il-vous-plait!';
    } else{
        E2 = "";
    }
    document.getElementById('E2').innerHTML = E2;

    if (contenu.value==""){
        E3 = "Veuillez entrez un contenu, s\'il-vous-plait!";
    } else if(!c.test(contenu.value)){
        E3 = "Veuillez entrez conrectement le contenu, s'il-vous-plait!";
    } else {
        E3 = "";
    }
    document.getElementById('E3').innerHTML = E3;

    // Accept

    var confirm = document.getElementById('confirm');

    if (confirm.checked == false){
        E4 = "Veuillez confirmer le traitement de ce formulaire, s'il-vous-plait !"
    } else {
        E4 = ""
    }
    document.getElementById('E4').innerHTML = E4;

    if (E1+E2+E3+E4 != ""){
        e.preventDefault();
        envoie = "";
    } else {
        envoie = "Formilaire envoyé !"
        alert(envoie);
    }
    document.getElementById('envoie').innerHTML = envoie;
})