var a = prompt('Ecrire Une phrase (10 mots maximun) : ');
var b = prompt('Donner un cactère : ');
var c = prompt('Donner un chiffre (1 à 10) : ');

alert("avant fction");


function strtok(str1, str2, n){

/*var str1 = a;
var str2 = b;
var n = c;*/

//alert("str1"+str1);
//alert("str2"+str2);
//alert("n"+n);

var phrase = str1.split(" ").join(str2);
console.log(phrase);

var separation = phrase.split(str2);
console.log(separation);

var choisir = separation.slice(n-1, n);
console.log(choisir);
return(choisir);
}

var mot=strtok(a, b, c);
alert(mot);

//strtok(str1, str2, n);


/*for (i = 0; i <= phrase.length; i++){
    console.log(phrase[i]);
}*/


/*var separation = phrase.split(str2);
console.log(separation);*/
