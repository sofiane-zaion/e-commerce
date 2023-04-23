<?php

//session_start();
?>



<nav class="navbar navbar-expand-lg navbar-light bg-black">
<img src="images/yasoshop.png" alt="logo" style="float: left; margin-right: 15px; width: 75px;"> 
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><h4><strong><span style="color:gold">A</span></strong><span style="color:white">ccueil </span></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="en_savoir_plus.php"><h4><strong><span style="color:gold">E</span></strong><span style="color:white">n savoir plus</span></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulaire_contact.php"><h4><strong><span style="color:gold">C</span></strong><span style="color:white">ontact</span></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ajouter_utilisateur2.php"><h4><strong><span style="color:gold">N</strong></span><span style="color:white">ous rejoindre</span></h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion2.php"><h4><strong><span style="color:gold">S</strong></span><span style="color:white">e connecter</span></h4></a>
      </li>
    </ul>
    <span class="navbar-text">
      Bienvenue chez Yaso shop
    </span>
  </div>
  




        <!-- verifie si une session est active -->
        
        <?php if (isset($_SESSION['utilisateur'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="deconnexion.php" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')">
                    <i class="fas fa-sign-out-alt"></i>Déconnexion  
                </a> 
            </li>

            <li class="nav-item">
            <a class="nav-link" > Bonjour <?php echo $_SESSION['utilisateur']['login'] ?>, nous vous invitons à débuter vos achats en toute sécurité.</a>
            </li>
        <?php else: ?>

           <li class="nav-item">
            <a class="nav-link" href="ajouter_utilisateur2.php"><i class="fas fa-user-plus"></i><h4><span style="color:gold">Créer un compte</span></h4></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Connexion2.php"><i class="fas fa-sign-in-alt"></i><h4><span style="color:gold">Connexion</span></h4></a>
            </li>  

            
        <?php endif; ?> 
        <!--La ligne  est utilisée pour indiquer la fin de la condition, 
        c'est-à-dire qu'elle marque la fin du bloc de code qui doit être exécuté 
        si la condition est vraie. Elle est nécessaire pour terminer 
        la structure conditionnelle et permettre l'exécution du code qui suit. -->
    </ul>
</div>

        <?php
        $productCount = 0;
        if (isset($_SESSION['utilisateur'])) {
            $idUtilisateur = $_SESSION['utilisateur']['id'];
            $productCount = count($_SESSION['panier'][$idUtilisateur] ?? []);
        }
        function calculerRemise($prix, $discount)
        {
            return $prix - (($prix * $discount) / 100);
        }

        ?>
        
        <a class="btn float-end" href="panier.php"><i class="fa-solid fa-cart-shopping"></i> Panier
            (<?php echo $productCount; ?>)</a>
    </div>
</nav>



       