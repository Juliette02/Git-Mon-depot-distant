function MathRandom(){
    console.log(Math.random())
}
MathRandom();

function verif(){
    var x = 0;
    while(x!=MathRandom()){
        if (x>MathRandom()){
            document.querySelector("#label1").textContent ="Trop Grand";
        } else {
            document.querySelector("#label1").textContent = "Trop petit";
        }
    }
}