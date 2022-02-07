var x = parseInt(prompt("Saisir différentes valeur numérique : "));
var tab = [];
var s = 0;
var MoyN = 0;

while (x != 0){
    var s = s + x;
    var x = parseInt(prompt("Saisir différentes valeur numérique : "));
    if ( x != 0){
        tab.push(x);
    } else { break; }
}

var MoyN = s/tab.length;

console.log(tab);
alert("le nombre de valeur saisie est de " + tab.length + "\n" + 
    "la somme de ces nombres est de " + s + "\n" +
    "la moyenne est de " + MoyN);

