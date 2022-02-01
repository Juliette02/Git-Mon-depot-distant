//................Exercice 1.........................Méthode 1..........................................//
var bouton1 = document.getElementById("Id_1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1() {


var n =parseInt(prompt("Quel sera la taille du tableau : "));

var tableau =[]; 

//Valeur à rentrer dans le tableau

nb_valeur = 0;

while(nb_valeur <n){

    var valeur = prompt("Entrez les valeurs du tableau : ");
    nb_valeur++;
    if (valeur != ""){
        tableau.push(valeur);//Ajoute les valeurs au tableau 
    } else { break; }

}

console.log(tableau);

alert(tableau);

}
//........................Exercice 2..................Méthode 2.........................................//
var bouton2= document.getElementById("Id_2");
bouton2.addEventListener("click",clickbtn2)

function clickbtn2() {


var tableau = Array(n);//n == taille du tableau 
var n =parseInt(prompt("Quel sera la taille du tableau : "));
var nb_valeur = 0;

while(nb_valeur <n){

    var valeur = prompt("Entrez les valeurs du tableau : ");
    tableau[nb_valeur]=valeur;
    nb_valeur++;
    
}
console.log(tableau);

alert(tableau);

}
