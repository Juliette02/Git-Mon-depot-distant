/*Exo directe quand on affiche la page*************************
var nom = prompt("Entrez votre nom : ");

if(nom==null){
    alert("Vous avez cliqué sur Annuler, recommencer ! ");
}

var prenom = prompt("Entrez votre prénom : ");
if(prenom==null){
    alert("Vous avez cliqué sur Annuler, recommencer ! ")
}

var reponse_homme = (window.confirm("Etes-vous un homme ?"));
    if(reponse_homme == true) {
        window.alert(`Bonjour Monsieur ${nom} ${prenom}\nBienvenue sur notre site web!`);
    }

    else{ 
        window.alert(`Bonjour Madame ${nom} ${prenom}\nBienvenue sur notre site web!`);
}
************************************************/


//Exercie sur les fenêtre avec un bouton//

var bouton1 = document.getElementById("Id_1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1() {

var nom = prompt("Entrez votre nom : ");
if(nom==null){
    alert.prompt("Vous avez cliqué sur Annuler, recommencer ! ");
    /*return;*/
}

var prenom = prompt("Entrez votre prénom : ");
if(prenom==null){
    alert("Vous avez cliqué sur Annuler, recommencer ! ")
    /*return;*/
}

var reponse = (window.confirm("Etes-vous un homme ?"));
    if(reponse == true) {
        window.alert(`Bonjour Monsieur ${nom} ${prenom}\nBienvenue sur notre site web!`);
    }
    else{
        window.alert(`Bonjour Madame ${nom} ${prenom}\nBienvenue sur notre site web!`);
}
}

//Exercice sur les opérateur//

/*var bouton2= document.getElementById("Id_2");
bouton2.addEventListener("click".clickbtn2)

function clickbtn2() {
var exo = window.alert(*/

a = "100";
b = 100;
c = 1.00;
d = true;

//Chaîne de caractères concaténez//
document.write("Ceci est une chaîne de caractères : " + a);

//Opérateur décrémentation sur b//
b = b--
document.write(b);

//Ajouter à c la valeur de a//
c = c + a
document.write(c)

//Inversez la valeur de d//
d = false