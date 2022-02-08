function MathRandom(){
    //alert("Dans MathRandom ! ");
    let random = Math.round(Math.random()*10);
    console.log(random);
    return random;
}

var y = MathRandom();

function verif(){
    var x = document.querySelector("#textBox1");

    console.log(x.value);
    console.log(y);
    console.log(x.value < y);

    if (x.value < y){            
            document.querySelector("#label1").textContent = "Trop petit";
        } 
    else {            
            document.querySelector("#label1").textContent = "Trop Grand";
        }
    if (x.value == y){
            alert("Vous avez trouver la valeur aléatoire ! ");
        }
}
