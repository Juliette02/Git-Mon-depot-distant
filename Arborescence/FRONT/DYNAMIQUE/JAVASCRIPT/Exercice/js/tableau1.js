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

tableau.sort((a, b) => {
    return a - b;
})

console.log(tableau);
//.......................................................................................//

/*function Tri(tableau){

    for (i=0; i<n; i++){
        alert("1er boucle");
        for (j=0; j<n; j++){
            alert("2eme boucle");
            if (tableau[j] > tableau[j+1]){
                alert("TRI");
                    console.log ("ancienne valeur " + tableau[j]);
                [tableau[j], tableau[j+1]] = [tableau[j+1], tableau[j]];
                    console.log("nouvelle valeur " + tableau[j]);
            }
        }
    }
    
}

Tri(tableau);

console.log(Tri(tableau));

alert("Tableau trié : " + Tri(tableau));
*/
//.........................................................................................//
/*
function sort(tableau){
    var changed;
    do{
        changed = false;
        console.log("1er boucle");
        for(i=0; i < n-1; i++) {
            console.log("2e boucle");
            if(tableau[i] > tableau[i+1]) {
                console.log("3e boucle");
                var tmp = tableau[i];
                tableau[i] = tableau[i+1];
                tableau[i+1] = tmp;
                changed = true;
            }
        }
    } while(changed);
}
console.log("sortie de boucle");
sort(tableau);
console.log(tableau);
*/
}