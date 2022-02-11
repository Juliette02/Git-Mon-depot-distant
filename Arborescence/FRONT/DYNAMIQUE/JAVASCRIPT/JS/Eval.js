//Exercice 1 - Calcul du nombre de jeunes, de moyens et de vieux
var bouton1 = document.getElementById("Id_1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1 (){

    var x = parseInt(prompt("Donner l'âge de toutes les personnes : "));
    var Tab1 = [];
    var Tab2 = [];
    var Tab3 = [];
    var n1 = 0;
    var n2 = 0;
    var n3 = 0;

        while (x != 100){
            var x =  parseInt(prompt("Donner l'âge de toutes les personnes : "));
                if (x < 20){
                    Tab1.push(x);
                    n1++;
                } else if ((20 <= x) && (x <= 40)){
                    Tab2.push(x);
                    n2++;
                } else if ((40 < x) && (x <= 100)) {
                    Tab3.push(x);
                    n3++;
                } else if (x == 100){
                    break ;
                }
        }

    console.log([Tab1, Tab2, Tab3]);
    console.log([n1, n2, n3]);

    alert("Le nombre de personne d'âge strictement inférieur à 20ans est de : " + n1 + 
    "\n Le nombre de personne d'âge compris entre 20ans et 40ans est de : " + n2 + 
    "\n Le nombre de personne d'âge strictement supérieur à 40ans est de :  " + n3);
}

//Exercice 2 - Table de multiplication
var bouton2 = document.getElementById("Id_2");
bouton2.addEventListener("click", clickbtn2);

function clickbtn2() {

    var x = parseInt(prompt("Donner un multiplicateur : "));
    var mf = "";

        for (i=0; i<11; i++){
            result = i * x;
            mf = mf + (i + " x " + x + " = " + result + "\n");
        }

    alert("Table de multiplication de " + x + " :\n " + mf);
}

//Exercice 3 - recherche d'un prénom
var bouton3 = document.getElementById("Id_3");
bouton3.addEventListener("click", clickbtn3);

function clickbtn3() {

    var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
    var n = prompt("Saisir un prénom : ");

    console.log(tab);
    
    if (tab.includes(n)) {
        var x = tab.indexOf(n);
        //console.log(x);
        tab.splice(x,1);
        tab.push("");
        //console.log(tab);
        alert(tab);
    } else {
        alert("!!Erreur!! " + n + " ne ce trouve pas dans le tableau!");
    }
    
}

//Exercice 4 - total d'une commande
var bouton4 = document.getElementById("Id_4");
bouton4.addEventListener("click", clcikbtn4);

function clcikbtn4() {
    var PU = parseInt(prompt("Entrez le prix du produit : "));
    var QTECOM = parseInt(prompt("Donner la quantité : "));
    var REM = 0;
    var PORT = 0;
    
    var TOT = PU * QTECOM;


    if (TOT < 100) {
        console.log("1er IF");
        REM = 0;
        PORT = TOT * (2/100);
        console.log("PORT =" + PORT);
        if (PORT < 6) {
            PORT = 6;
        }
        console.log("PORT apres if = " + PORT);
        TOT = TOT + PORT;
        console.log("TOT * REM + PORT = " + TOT);
    }
    else if ((100 <= TOT <= 200) && (TOT < 500)) {
        console.log("2e IF");
        REM = (1 - (5/100));
        PORT = TOT * (2/100);
        console.log("PORT =" + PORT);
        if (PORT < 6) {
            PORT = 6;
        }
        console.log("PORT apres if = " + PORT);
        TOT = TOT * REM + PORT;
        console.log("TOT * REM + PORT = " + TOT);
    } else if ((100 <= TOT <=200) || (TOT > 500)) {
        console.log("3e IF");
        REM = (1 - (10/100));
        TOT = TOT * REM;
        console.log("TOT apres REM = " + TOT)
        if ((TOT < 500)) {
            PORT = TOT * (2/100);
            console.log("PORT =" + PORT);
            if (PORT < 6) {
                PORT = 6;
            }
            console.log("PORT apres if = " + PORT);
            TOT = TOT + PORT;
            console.log("TOT * REM + PORT = " + TOT)
        } else if (TOT > 500) {
        console.log("TOT apres PORT = " + TOT);
        PORT = 0;
        TOT = TOT + PORT;
        console.log("TOT * REM + PORT = " + TOT);
        }
    }


    /*if ((TOT >200) && (TOT > 500)) {
        REM = (1 - (10/100));
        PORT = 0;
        TOT = TOT * REM + PORT;
        console.log("TOT * REM + PORT = " + TOT)
        console.log("remise de 10% soit et frait de port à 0€ =" + TOT + "€" );
    } else { break; }
    if ((TOT > 200) && (TOT < 500)) {
        REM = (1 - (10/100));
        console.log(REM);
        TOT = TOT * REM;
        console.log("TOT * REM = " + TOT);
        PORT = TOT * (2/100);
        console.log("PORT "+ PORT);
        TOT = TOT + PORT;
        console.log("TOT + PORT = " + TOT);
    } else { break; }
    if ((TOT >= 100) && (TOT <= 200)){
        REM = (1 - (5/100));
        PORT = TOT * (2/100);
        console.log("PORT = " + PORT);
        if (PORT < 6){
            PORT = 6;
        }
        console.log("PORT apres if = " + PORT);
        TOT = TOT * REM + PORT;
        console.log("TOT * REM + PORT = " + TOT)
    } else { break; }
    if (TOT < 100) {
        REM = 0;
        PORT = TOT * (2/100);
        console.log("PORT =" + PORT);
        if (PORT < 6) {
            PORT = 6;
        }
        console.log("PORT apres if = " + PORT);
        TOT = TOT + PORT;
        console.log("TOT * REM + PORT = " + TOT)
    } else { break; }*/


}