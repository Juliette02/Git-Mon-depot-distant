<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jarditou</title>
</head>
<body>
    
    <div class="conatiner-fluid">

    <header class="pl-10">
        <div class="d-none d-sm-block">
            <div class="row px-4">
                <img src="images/jarditou_logo.jpg" class="img-fluid col-4" alt="Image_Logo" title="Logo_Jarditou">
                <!-- <div class="col-4"></div> -->
                <h2 class="offset-4 col-4 text-center pt-3">Tout le jardin</h2>
        </div>
    
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Jarditou.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav col-6">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Accueil<span class="sr-only"></span></a></li>
                    <li class="nav-item"><a class="nav-link" href="tableau.html">Tableau</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0 offset-1 col-5 justify-content-center">
                    <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
    </header>

    <img src="images/promotion.jpg" class="img-responsive rounded mx-auto d-block" width=100% alt="Promotion" title="Promotion_la_de_terrasse">

    <section class="px-5">

        <p>* Ces zones sont obligatoires</p>
        <form action="monscript.php" id="inscription" method="POST">
            <fieldset>
                <legend class="h2">Vos coordonnées</legend>
                <div class="form-group">
                    <label for="nom">Nom*:</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom"><br>
                        <p id="E1" style="color :red"></p>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom*:</label>
                        <input type="text" class="form-control" name="prenom" id="Prénom" placeholder="Veuillez saisir votre prénom"><br>                    
                        <p id="E2" style="color :red"></p>
                </div>
                <div class="form-group">
                    <label for="sexe" class="form-check pl-0">Sexe*:</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="sexe" value="feminin" id="sexe">Féminin<br> 
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="sexe" value="masculin" id="sexe"> Masculin<br>
                        </div>
                        <p id="E3" style="color :red"></p>
                </div>
                <div class="form-group">
                    <label for="date">Date de naissance*:</label>
                        <input type="text" class="form-control" name="ddn" id="date"><br>
                        <p id="E4" style="color :red"></p>
                </div>
                <div class="form-group">
                    <label for="Code_postal">Code postal*:</label>
                        <input type="text" class="form-control" name="code_postal" id="Code_postal"><br>
                        <p id="E5" style="color :red"></p>
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse:</label>
                        <input type="text" class="form-control" name="adresse" id="adresse"><br>
                </div>
                <div class="form-group">
                    <label for="ville">Ville:</label>
                        <input type="text" class="form-control" name="ville" id="ville"><br>
                </div>
                <div class="form-group">
                    <label for="mail">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="dave.loper@afpa.fr" id="mail"><br>
                        <p id="E6" style="color :red"></p>
                </div>
            </fieldset>
            <fieldset>
                <legend class="h2">Vos demande</legend>
            <div class="form-group">
                <label for="sujet">Sujet*:</label>
                    <select class="form-control" id="sujet" name="sujet"> 
                    <option value="" selected>Veuillez sélectionner un sujet</option>
                    <option value="mes_commandes">Mes commandes</option>
                    <option value="question_sur_un_produit">Question sur un produit</option>
                    <option value="reclamations">Réclamation</option>
                    <option value="autres">Autres</option>
                    </select><br>
                    <p id="E7" style="color :red"></p>
            </div>
            <div class="form-group">
                <Label for="quest">Votre question*:</Label>
                    <textarea class="form-control" name="commentaire" id="quest" rows="2" cols="20"></textarea><br>
                    <p id="E8" style="color :red"></p>
            </div>
            </fieldset>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="formulaire" id="accept" > * J'accepte le traitement informatique de ce formulaire<br>
                <p id="E9" style="color :red"></p>
            </div>

        <INPUT TYPE="submit" class="btn btn-dark" NAME="envoyer" VALUE=" Envoyer ">       <input type="reset" class="btn btn-dark" name="annuler" value=" Annuler ">
    
    </form>

    <p id="envoie" style="color :green"></p>

    </section>

    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="">Mentions Légales</a></li>
                <li class="nav-item"><a class="nav-link" href="">Horaires</a></li>
                <li class="nav-item"><a class="nav-link" href="">Plan du site</a></li>
            </ul>
            <span class="navbar-text"></span>
        </div>
        </nav>
    </footer>

    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="JS/contact.js"></script>

</body>
</html>