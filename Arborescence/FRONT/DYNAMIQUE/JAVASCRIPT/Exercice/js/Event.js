var element = document.getElementById("2");
element.addEventListener("click", function(){
        var txt =document.getElementsByName("textChoix");
        for (i=0; i<txt.length; i++){
            console.log(txt[i].value);
            alert("Vous avez saisi : " + txt[i].value)
        }
})