var tableau = [];

//alert("avt fuction");

function GetInteger(){   
    //alert("Dans foction GetInteger");
    Entier = parseInt(prompt("Ecrire un chiffre entier : "));
    return(Entier);
}
GetInteger();

var n =parseInt(prompt("Quel sera la taille du tableau : "));

function InitTab(){
    //alert("dans foction IniTab");
    var tableau = Array(n);//n == taille du tableau 
return(tableau);
}
InitTab();

var nb_valeur = 0;

function SaisieTab(){
    //alert("Dans foction SaisieTab");
    while(nb_valeur <n){

        var valeur = parseInt(prompt("Entrez les valeurs du tableau : "));
        tableau[nb_valeur]=valeur;
        nb_valeur++;
    }
        return(tableau);
}
SaisieTab();

function AfficheTab(){
    //alert("Dans foction AfficheTab");
    alert(tableau);
    console.log(tableau);
}
AfficheTab();

function RechercheTab(){
    //alert("Dans la fonction RechercheTab");
    alert(tableau[Entier]);
    console.log(tableau[Entier]);
}
RechercheTab();

function InfoTab(){
    //alert("Dans la fonction InfoTab");
    var max = 0;//Maximun du tabeau 
        for(i=0;i<tableau.length; i++){
            if (tableau[i]>max){
                max = tableau[i];
            }
    }
    console.log(max);
    
    var moyN = 0;//Moyenne du tableau
    var n = tableau.length;
    var s = 0;
    for(i=0; i<n; i++){
        s += tableau[i];
    }
    var moyN = s / n;
    console.log(moyN);

    alert("La valeur maximale est de " + max + "\n" +
    "La moyenne du tableau est de " + moyN );
}
InfoTab();

