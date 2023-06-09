<!DOCTYPE html>
<html>
<head>
<title>Portfolio Neal Birstol</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Contact </title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="Portfolio Neal/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/background.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
  <a href="Index.html" class="w3-bar-item w3-button w3-wide"><img src="images/icon.png" width="50"></a>


    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
        <a href="Index.html" class="w3-bar-item w3-button" id="home"><i class="fa fa-home"></i>Accueil</a>
        <a href="Profil.html" class="w3-bar-item w3-button" id="me"><i class="fa fa-user"></i> Profil</a>
        <a href="Projet.html" class="w3-bar-item w3-button" id="projet"><i class="fa fa-th"></i> Projet</a>      
        <a href="Entreprise.html" target = blanco class="w3-bar-item w3-button" id="Entreprise"><i class="fa fa-envelope"></i> Entreprise</a>
        <a href="Veille Technologique.html" target = blanco class="w3-bar-item w3-button" id="Vt"><i class="fa fa-search"></i> Veille Technologique</a>
        <a href="Contact.html" target = blanco class="w3-bar-item w3-button" id="Entreprise"><i class="fa fa-envelope"></i> Contact</a>
      </div>
    </div>
</div>

  <body>

    <div class="w3-container w3-light-grey w3-padding-64">
      <div class="w3-row-padding">

      <h1>Contactez-nous</h1>
      <p> Pour toute demande, merci de remplir le formulaire ci-dessous. </p>
      <form method="post">
        <label>Votre Nom </label>
        <input type="text" name="Nom" required>
        <label>Votre Prénom </label>
        <input type="text" name="Prénom" required>
        <label>Sujet </label>
        <input type="text" name="Sujet" required>
        <label>Votre email</label>
        <input type="Email" name="Email" required>
        <label>Message</label>
        <textarea name="Message" placeorder="Message" required></textarea>
        <input type="submit" value="Envoyer le  message">
      </form>
  
      <?php
      //Si le formulaire à été soumis
      if (isset($_POST['message'])) {
        $message = "Ce message vous à ete envoyer depuis via la page de contact de votre site Portfolio
        Nom : ". $_POST["Nom"] . "
        Prénom : ". $_POST["Prénom"] . "
        Email : ". $_POST["Email"] . "
        Message : ". $_POST["Message"];

        $retour = mail('nealbristol2002@gmail.com' .$_POST["sujet"],
        $message, "nealbristol2002@gmail.com" . "\r\n" . "Reply-to" . $_POST["email"]);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';

      }
      ?>
      </div>
      </div>
</body>
</html>
