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
//.......................Exercice 3....................................................................//
var bouton3= document.getElementById("Id_3");
bouton3.addEventListener("click",clickbtn3)

function clickbtn3() {

    var tableau = Array(n);//n == taille du tableau 
var n =parseInt(prompt("Quel sera la taille du tableau : "));
var nb_valeur = 0;

while(nb_valeur <n){

    var valeur = prompt("Entrez les valeurs du tableau : ");
    tableau[nb_valeur]=valeur;
    nb_valeur++;
    
}
console.log(tableau);

alert("Tableau non trié : " + tableau);

//...............................Tri tableau...............................//

/*function Tri(a, b){
    var a = a.toLowerCase();
    var b = b.toLowerCase();
    if (a<b){
        return(-1);
        }
    if (a>b){
        return(1);
        }
    if (a===b){
        return(0);
        }
    }
}*/

function Tri (){

alert("Dans la function");

    for (i=0; i<tableau.length -1; i++){
        for (j=0; j<tableau.length - 1 - i; j++){
            if (tableau[i]> tableau[j+1]){
                console.log (tableau[j]);
                [tableau[j], tableau[j+1]] = [tableau[j+1], tableau[j]];
                console.log(tableau[j]);
            }
        }
    }
    return(tableau);
}

console.log(Tri());

alert("Tableau trié : " + Tri());

}


