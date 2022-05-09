document.getElementById("Form").addEventListener("submit", function(e){

    var Title = document.getElementById("Title");
    var Artist = document.getElementById("Artist");
    var Years = document.getElementById("Year");
    var Genre = document.getElementById("Genre");
    var Label = document.getElementById("Label");
    var Price = document.getElementById("Price");
    var Picture = document.getElementById("Picture");

    var n = /^[a-zA-Z0-9\-]+$/;
    var g = /^[a-zA-Z0-9\,\/\-]+$/;
    var l = /^[a-zA-Z\-]+$/;
    var y = /^[0-9]{4}$/;
    var p = /^[0-9]+$/;


    if (Title.value==""){
        E1 = "Please, enter the Title !";
    } else if (!n.test(Title.value)){
        E1 = "Please, enter the Title correctly !";
    } else {
        E1 = "";
    }
    document.getElementById("E1").innerHTML = E1;//...........Version simplifier...........//


    if (Artist.value==""){
        E2 = "Please enter the Artist !";
    } else if (!n.test(Artist.value)){
        E2 = "Please, enter the Artist correctly !";
    } else {
        E2 = "";
    }
    document.getElementById("E2").innerHTML = E2;//...........Version simplifier...........//

    if (Years.value==""){
        E3 = "Please enter the Year !";
    } else if (!y.test(Years.value)){
        E3 = "Please, enter the Year correctly !";
    } else {
        E3 = "";
    }
    document.getElementById("E3").innerHTML = E3;//...........Version simplifier...........//

    if (Genre.value==""){
        E4 = "Please, enter the Genre !";
    } else if (!g.test(Genre.value)){
        E4 = "Please, enter the Genre correctly !";
    } else {
        E4 = "";
    }
    document.getElementById("E4").innerHTML = E4;//...........Version simplifier...........//

    if (Label.value==""){
        E5 = "Please, enter the Label !";
    } else if (!l.test(Label.value)){
        E5 = "Please, enter the Label correctly !";
    } else {
        E5 = "";
    }
    document.getElementById("E5").innerHTML = E5;//...........Version simplifier...........//

    if (Price.value==""){
        E6 = "Please, enter the Price !";
    } else if (!p.test(Price.value)){
        E6 = "Please, enter the Price correctly !";
    } else {
        E6 = "";
    }
    document.getElementById("E6").innerHTML = E6;//...........Version simplifier...........//

    if (Picture.value==""){
        E7 = "Please, enter the Picture !";
    } else {
        E7 = "";
    }
    document.getElementById("E7").innerHTML = E7;//...........Version simplifier...........//

    if (E1+E2+E3+E4+E5+E6+E7 != "") { 
        e.preventDefault();
        envoie = document.getElementById("envoie").innerHTML = "";
    } else {
        envoie = "Successful addition !";
        envoie = document.getElementById("envoie").innerHTML = envoie;
        alert(envoie);
    }
})