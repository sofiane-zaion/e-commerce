<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <title>Contact</title>
    <?php include '../include/nav_front.php' ?>
</head>

<body id="body">



<div  style="background-image: url('images/parfum3.jpg'); background-size: cover;  background-color:aqua;height: 700px; width: 100%;background-repeat: no-repeat;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <img src="images/logoYASOSHOP.png" style="margin-right: 300px;">
            <h1 style="font-size: 6em; color: black; margin-left: -350px; margin-top: 50px;font-family: RapScript"><span style="color:black;">Formulaire de contac</span><span style="color:gold;">t</span></h1>
          </div>
    </div>
    <br>
    <br>
   
</div>





        
</body>



        
<br>

<div class="container-fluid bg-gold text-light p-5 "  style="background-color: gold;" id="div1">
  <div class="row">
    <div class="col-md-12">
      <h1 id="qualite"><span style="color:black"><center><em>Contact</h1></center></em>
      <br>
      <br>
      <img src="images/contact.jpg" style="float: left; margin-left: 50px; width: 375px; height: 375px;"> 
      <center><p><span style="color:gold"><strong><em><h3> Pour toutes demandes ou renseignements, veuillez nous contacter en complétant le formulaire ci-dessous.
      <br>
      <br>
      <ul class="contact-info">
          <li><i class="fa fa-phone"></i><h4> Téléphone: +33 7 66 51 67 19 / +33 6 50 01 51 67 </h4>  </li>
          <br>
          <li><i class="fa fa-envelope"></i> <h4> Email: sofian.zaion@imie-paris.fr / yassine.aitalla@imie-paris.fr </h4><li>
          <br>
          <li><i class="fa fa-map"></i> <h4> Adresse: 92230 Gennevilliers / 92700 Colombes</li>
        </ul>
      <br>

    </div>
  </div>
</div>


       
      <div class="col-md-6">
        <h3>Formulaire de contact</h3>
        <form action="envoyer_mail.php" method="post" onsubmit="return envoyerMail()";>
          <div class="form-group">



          <script>
          function envoyerMail() {
          // Code pour envoyer le message
          // ...

          // Afficher la boîte de dialogue
          var alertBox = alert('Votre message à bien était envoyé');
    alertBox.className = "alert-box"; // ajouter la classe CSS

  // Empêcher la soumission du formulaire
  return false;
}
</script>

<style>

.alert-box {
   background-color: #007bff; /* couleur bleue */
   color: #fff; /* texte en blanc */
   border: none; /* enlever la bordure */
   padding: 10px; /* ajouter un peu d'espace intérieur */
   font-size: 18px; /* augmenter la taille de la police */
}

</style>

<label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" placeholder="Entrez votre message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
  
<br>
<br>




<footer>

<nav class="navbar navbar-expand-lg navbar-light bg-black">
<img src="images/yasoshop.png" alt="logo" style="float: left; margin-right: 15px; width: 75px;"> 
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="mentions_legales.php"><h6><span style="color:white">Mentions légales</span></h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulaire_contact.php"><h6><span style="color:white">Contactez-nous</span></h6></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion2.php"><h6><span style="color:white">Rejoignez-nous</span></h6></a>
      </li>
    </ul>
   
   
   
   
    <div style="background-color:gold; text-align:center; width: 100%; height:100;">
  <label for="name" style="position:relative; display:inline-block; color:black ">
    Copyright © 2023 Yaso Shop
    <span style="position:absolute; right:-20px; top:50%; transform:translateY(-50%);">
    <a href="#body"> <i class="fas fa-chevron-up" ></i></a> 
   
    </span>
  </label>
</div>

  </div>
</footer>

    