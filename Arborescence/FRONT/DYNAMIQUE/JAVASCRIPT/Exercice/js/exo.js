/*Exo direct quand on affiche la page*************************
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


//.............Exercie sur les fenêtre avec un bouton................//

var bouton1 = document.getElementById("Id_1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1() {

var nom = prompt("Entrez votre nom : ");
if(nom==null){
    alert("Vous avez cliqué sur Annuler, recommencer ! ");
    /*return;*/
}

var prenom = prompt("Entrez votre prénom : ");
if(prenom==null){
    alert("Vous avez cliqué sur Annuler, recommencer ! ");
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

//..................Exercice sur les opérateur.....................//

var bouton2= document.getElementById("Id_2");
bouton2.addEventListener("click",clickbtn2)

function clickbtn2() {

//Chaîne de caractères concaténez//
var a = "100";

//Opérateur décrémentation sur b//
var b = 100;
b--;

//Ajouter à c la valeur de a//
var c = 1.00;
c = c + a;

//Inversez la valeur de d//
var d = true;
d = false;


//Réponse//
window.alert("Ceci est une chaîne de caractères : " + a + " " +
            "La décrémentation de b est " + b + " " +
            "La valeur de c est " + c + " " +
            "La valeur de d est " + d);
}

//..................Exercice sur les condidtions..................//

var bouton3= document.getElementById("Id_3");
bouton3.addEventListener("click",clickbtn3)

function clickbtn3() {

    //Exercice 1//
var a = prompt("Ecrire un nombre : ");
a = a%2;
if(a==0) {
    alert("Nombre pair");
}
else{
    alert("Nombre impair");
}

//Exercice 2//
var b = prompt("En quel année êtes-vous née : ");
b = 2022 - b;
if(b>=18){
    alert("Vous êtes majeur.");
}
else{
    alert("Vous êtes mineur.");
}

//Exercice //
var A = prompt("Ecrire un nombre : ");
var C = prompt("Donner un opérateur de calcul : ");
var B = prompt("Ecrire un autre nombre : ");
var D = "résultat"

if(C!="*") {
    alert("Erreur, mauvais opérateur ! ");
}
else 
    {
    D = A * B;
    alert(A + C + B + "=" + D);
}
}

//..............................Exercice sur les boucles.......................//

            //Exercice 1//
var bouton4_1= document.getElementById("Id_4_1");
bouton4_1.addEventListener("click",clickbtn4_1)

function clickbtn4_1() {

var prenom = prompt("Ecrire un prénom : ");
while(prenom = true){
    prompt("Ecrire un prénom : ");
}
}
            //Exercice 2//
var bouton4_2= document.getElementById("Id_4_2");
bouton4_2.addEventListener("click",clickbtn4_2)

function clickbtn4_2() {

var N = prompt("Ecrtire un chiffre : ");
i = N-1
while(N>0){
    alert("Voici les nombre inférieurs à "+N+" sont : "+ i);
    i--;
    if(i<0){
        break;
    }
}
}
            //Exercice 3//
var bouton4_3= document.getElementById("Id_4_3");
bouton4_3.addEventListener("click",clickbtn4_3);

function clickbtn4_3(){

var num = prompt("Ecrire un chiffre entier : ");
while(num==0){
    prompt("Ecrire un chiffre entier : ")
    if(num=0){
        break;
    }
}

}
