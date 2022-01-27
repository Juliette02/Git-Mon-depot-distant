
function afficheImg(image){

        //alert("chemin image ds fction vaut : "+image);

      document.getElementById("imageInsert").innerHTML = "<img src='"+ image +"'>";
        
  /*document.getElementById("papillon").innerHTML = "<img src='" + images/papillon.jpg  + "'>";*/
  
}

var mon_image =prompt("merci d'indiquer le nom de votre image (papillon.jpg)");
chemin_image="images/"+mon_image;

//alert("avant fction ! ");

afficheImg(chemin_image);
      
      var a = prompt("Entrez un nombre : ");
      var b = prompt("Entrez un multiplicateur : ");
      
    function carre(){
        var racine = a*a*a;
        return(racine)
      }

    function produit(){
        var resultat = a*b;
        return(resultat)
      } 

      
      //afficheImg(image);
      document.write("La cube de " + a + " est égal à " + carre() + ".\n" 
          + "Le produit de " + a + " x " + b + " est égal à " + produit());


//..................................................................................................//
/*
  function afficheImg(image){

  // write réécrit dans la page courante, mais la vide
  // réécrit dans le body
  
  //document.write ("<img src='"+image+"'>");
  
  //tandis que inner écrit du code HTML là où on lui indique
  //dans la page courante 
  //Cf Dropbox\Support Formation\JAVASCRIPT\Javascript.docx
  
  document.getElementById("papillon").innerHTML = "<img src='"+ image +"'>";
  
  
  }
  
  var mon_image =prompt("merci d'indiquer le nom de votre image (papillon.jpg)");
  chemin_image="img/"+mon_image;
  afficheImg(chemin_image);
  */
 //.................................................................................................//