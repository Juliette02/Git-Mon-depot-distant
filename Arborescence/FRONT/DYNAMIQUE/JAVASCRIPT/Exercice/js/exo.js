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
/***************
 * var tableau = [prompt("Ecrire un prénom : ")]; 
for(var i in tableau){
    console.log(tableau[i]); *************Mauvaise réponse******************
    console.log(i)
    **************************/

    var prenom = prompt("Ecrire un prénom : ");
    var n = 0
    var message_final=""

    while(prenom !=""){
        //alert("prenom pas vide ! : "+prenom);
        prenom=prompt("Ecrire un prénom : ");
        n++;
    message_final = message_final + prenom + "\n";
    }
    if(prenom ==""){
        alert(message_final + n-1);
    }

}

            //Exercice 2//
var bouton4_2= document.getElementById("Id_4_2");
bouton4_2.addEventListener("click",clickbtn4_2)

function clickbtn4_2() {

    var N = prompt("Ecrtire un chiffre : ");
    i = N 
    message_final =""

    while(N>0){
        //alert("Voici les nombre inférieurs à "+N+" sont : "+ i);
        if(i<1){
            break;
        }i--;
        message_final = message_final + i+",";
        
    }
    alert("Les chiffres inférieur à " +N+ " sont : " + message_final);
    }
            //Exercice 3//
var bouton4_3= document.getElementById("Id_4_3");
bouton4_3.addEventListener("click",clickbtn4_3);

function clickbtn4_3(){

    var a = prompt("Ecrire un chiffre entier : ");
    var somme = 0;
    var n = 0;

    while(a!="0"){
        a = prompt("Ecrire un chiffre entier : ");
        var somme = somme + parseFloat(a);
        var n = n+1;
}
        var moyenne = somme/n;
        alert("La somme des nombres est de ; "+somme+"\n"+
            "La moyenne est de : "+moyenne);
    }

            //Exercice 4//
var bouton4_4= document.getElementById("Id_4_4");
bouton4_4.addEventListener("click",clickbtn4_4);

function clickbtn4_4(){

    var n = prompt("Ecrire un chiffre : ");//Nombre de multilication//
    var x = prompt("Donner un autres chiffre : ");//Nombre à multiplier//
    var limite=parseInt(n)+1;
    var message_final="";

    for(i=1; i<limite; i++){
            resultat = i * x;
            //Rappel : le \n permet de passer à la ligne en Javasript !!!!
            
            message_final = message_final + (i+" * "+x+" = "+resultat+"\n"); 
    }
    alert (message_final);
    /*do
    {*********************************************************************
        resultat = n * i;
        n++;                            Mauvais résultat !
        alert(n+" * "+i+" = "+resultat);
        ******************************************************************
    }while(i=x);*/
}

            //Exercice 5//
var bouton5= document.getElementById("Id_5");
bouton5.addEventListener("click",clickbtn5);

function clickbtn5(){
var a = prompt("Entrez un mots : ");
var voyelles = "a" || "e" || "i" || "o" || "u";
var nb_voyelle = 0;

console.log(a.substring());
console.log(a.length);
console.log(a.indexOf())

for  (i=0; i<a.length; i++) {
    
    if(a.substring()==voyelles){
    nb_voyelle++;
    }
}

/*for (i=0; i<a.length; i++){
        c = a.indexOf(i);
    if (c=="a" || c=="e" || c=="i" || c=="o" || c=="u"){
        nb_voyelle++;
    }
}*/
alert(`La chaine ${a} posssède ${nb_voyelle} voyelles`);

}
//................................Exercice sur les fonction...........................//


//......................................................................//