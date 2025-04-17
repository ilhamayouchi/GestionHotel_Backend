<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="demande.css">
  <link rel="stylesheet" href="foot&nav.css">
  <link rel="stylesheet" href="/Views/css/login.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.container {
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  margin: 20px auto;
}

.container .title {
  font-size: 25px;
  font-weight: 500;
  position: relative;
  margin-bottom: 20px;
}

.container .title::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  background: linear-gradient(135deg, #852929, #a33333);
}

.content form .user-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

form .user-details .input-box {
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}

form .input-box span.details {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.user-details .input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid {
  border-color: #852929;
}

form .gender-details {
  margin: 20px 0;
}

form .gender-details .gender-title {
  font-size: 20px;
  font-weight: 500;
}

form .category {
  display: flex;
  width: 200px; /* Réduit la largeur du conteneur */
  margin: 14px 0;
  gap: 15px; /* Ajoute un espacement uniforme entre les éléments */
  justify-content: flex-start; /* Aligne les éléments au début */
}

.gender-details .category label {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.gender-details .category .dot {
  height: 18px;
  width: 18px;
  background: #d9d9d9;
  border-radius: 50%;
  margin-right: 10px;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two {
  background: #852929;
  border-color: #d9d9d9;
}

form input[type="radio"] {
  display: none;
}

form .button {
  height: 45px;
  margin: 35px 0;
}

form .button input {
  height: 100%;
  width: 100%;
  border-radius: 5px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: linear-gradient(135deg, #852929, #a33333);
}

form .button input:hover {
  background: linear-gradient(-135deg, #852929, #a33333);
}

@media(max-width: 584px) {
  .container {
    max-width: 100%;
  }
  
  form .user-details .input-box {
    margin-bottom: 15px;
    width: 100%;
  }
  
  form .category {
    width: 100%;
  }
  
  .content form .user-details {
    max-height: 300px;
    overflow-y: scroll;
  }
  
  .user-details::-webkit-scrollbar {
    width: 5px;
  }
}

@media(max-width: 459px) {
  .container .content .category {
    flex-direction: column;
  }
}
    nav {
            background-color: #fff; /* Couleur de fond de la navbar */
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        .nav-links li a {
            text-decoration: none;
            color: #852929; /* Couleur du texte */
            font-weight: bold;
        }
        :root {
    --primary-color: #852929;  /* Couleur principale */
    --primary-light: #a33434;  /* Couleur principale claire */
    --gold: #c5a47e;            /* Couleur dorée */
    --cream: #f5f5f0;           /* Couleur crème */
}
/* Lien de basculement */
.toggle-auth {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #666;
    }

    .toggle-auth a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 500;
    }

    .toggle-auth a:hover {
      text-decoration: underline;
    }

.footer {
    background-color: var(--gold); /* Couleur de fond */
    color: white; /* Couleur du texte */
    padding: 10px 0; /* Espacement vertical réduit */
}

.footer-container {
    display: flex; /* Disposition en flex */
    justify-content: space-between; /* Espacement entre les sections */
    flex-wrap: wrap; /* Permet aux sections de passer à la ligne si besoin */
    max-width: 1200px; /* Largeur maximale */
    margin: 0 auto; /* Centrer le conteneur */
}

.footer-section {
    flex: 1; /* Chaque section prend un espace égal */
    padding: 5px; /* Espacement interne réduit */
    min-width: 150px; /* Largeur minimale réduite */
}

.footer-section h5 {
    font-size: 1.1em; /* Taille de la police des titres réduite */
    margin-bottom: 5px; /* Espacement sous les titres réduit */
}

.footer-section p, .footer-section a {
    margin-bottom: 3px; /* Espacement sous les paragraphes et liens réduit */
    color: white; /* Couleur des textes */
    text-decoration: none; /* Pas de soulignement */
}

.footer-link:hover {
    text-decoration: underline; /* Soulignement au survol */
}

.social-media {
    margin-top: 5px; /* Espacement au-dessus des icônes réduit */
}

.social-btn {
    margin-right: 5px; /* Espacement entre les icônes réduit */
    color: white; /* Couleur des icônes */
    font-size: 18px; /* Taille des icônes réduite */
}

.gallery {
    display: flex; /* Disposition en flex pour les images */
    flex-wrap: wrap; /* Permet aux images de passer à la ligne */
    justify-content: space-between; /* Espacement entre les images */
}

.gallery img {
    width: 30%; /* Largeur des images */
    margin-bottom: 10px; /* Espacement en bas */
    border-radius: 5px; /* Coins arrondis */
}

.newsletter {
    display: flex; /* Disposition en flex pour le formulaire */
}

.newsletter input {
    flex: 1; /* Prendre l'espace restant */
    padding: 3px; /* Espacement interne réduit */
    border: none; /* Pas de bordure */
    border-radius: 5px 0 0 5px; /* Coins arrondis */
}

.newsletter button {
    padding: 3px 8px; /* Espacement interne réduit */
    background-color: var(--primary-light); /* Couleur de fond du bouton */
    border: none; /* Pas de bordure */
    border-radius: 0 5px 5px 0; /* Coins arrondis */
    cursor: pointer; /* Changer le curseur au survol */
}

.newsletter button:hover {
    background-color: var(--primary-color); /* Couleur au survol */
}

.copyright {
    text-align: center; /* Centrer le texte */
    padding: 5px 0; /* Espacement vertical réduit */
    border-top: 1px solid white; /* Bordure supérieure */
    margin-top: 5px; /* Espacement au-dessus réduit */
}

.footer-menu {
    margin-top: 5px; /* Espacement au-dessus du menu réduit */
}

.footer-menu a {
    color: white; /* Couleur des liens */
    margin: 0 5px; /* Espacement horizontal réduit */
    text-decoration: none; /* Pas de soulignement */
}

.footer-menu a:hover {
    text-decoration: underline; /* Soulignement au survol */
}

@media (max-width: 768px) {
     .footer-container {
        flex-direction: column; /* Disposition en colonne sur mobile */
        align-items: center; /* Centrer les éléments */
    }
    
    .gallery img {
        width: 80%; /* Largeur des images sur mobile */
    }
    
    .newsletter {
        flex-direction: column; /* Disposition en colonne pour le formulaire */
    }
    
    .newsletter input {
        margin-bottom: 5px; /* Espacement en bas réduit */
        width: 100%; /* Largeur à 100% sur mobile */
    }
}

  </style>
  
</head>
<body>
    <!-- Navbar -->
    <nav>
      <div class="nav-container">
          <div class="icon p-2 me-2">
              <img class="img-fluid" src="PALIAS HOTEL.png" alt="Icon" style="width: 70px; height: 70px;">
          </div>

          <ul class="nav-links">
              <li><a href="hébergement.html">HÉBERGEMENT</a></li>
              <li><a href="about.html">SERVICES</a></li>
              <li><a href="gallerie.html">GALLERIE</a></li>
              <li><a href="events.html">ÉVÉNEMENT ÉXCLUSIF</a></li>
              <li><a href="inscription.html">CONNEXION</a></li>
          </ul>
      </div>
  </nav>
  <div class="container">
    <!-- Title section -->
    <div class="title">Connexion</div>
    <div class="content">
      <!-- Registration form -->
      <form form method="POST" action="index.php?action=login">
        <div class="user-details">
         <!--   Input for Full Name -->
          <!-- <div class="input-box">
            <span class="details">Nom Complet</span>
            <input type="text" placeholder="Enter your name" required>
          </div>  -->
          
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Enter your email" required>
          </div>
          
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input  name="mot_de_passe" type="password" placeholder="Enter your password" required>
          </div>
          
        </div>
        

        <!-- Submit button -->
        <div class="button">
            <input
              type="submit"
              value="Se connecter"
              onclick="window.location.href='index.html';">
          </div>
          
      </form>
      <!-- Lien vers la connexion -->
      <div class="toggle-auth">
        Vous n’avez pas encore de compte ? <a href="index.php?action=show_register">S'inscrivez-vous</a>
      </div>
    </div>
  </div>
 
  <!--Footer-->
  <div class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h5>Get In Touch</h5>
            <p><i class="fa fa-map-marker-alt"></i> 123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt"></i> +012 345 67890</p>
            <p><i class="fa fa-envelope"></i> info@example.com</p>
            <div class="social-media">
                <a class="social-btn" href=""><i class="fab fa-twitter"></i></a>
                <a class="social-btn" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="social-btn" href=""><i class="fab fa-youtube"></i></a>
                <a class="social-btn" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="footer-section">
            <h5>Liens</h5>
            <a class="footer-link" href="index.html#bgservices">Notre Hotel</a>
            <a class="footer-link" href="index.html#bgpro">Actualités</a>
            <a class="footer-link" href="index.html#contact-section">Contact</a>
            <a class="footer-link" href="about.html">Services</a>
        </div>
       
        <div class="footer-section">
            <h5>Newsletter</h5>
            <p>Inscrivez-vous pour des mises à jour.</p>
            <div class="newsletter">
                <input type="text" placeholder="Votre email">
                <button type="button">S'inscrire</button>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; Tous droits réservés. Conçu par <a href="https://PALAIS_REVES.com">PALAIS_REVES</a></p>
        <div class="footer-menu">
            <a href="">Home</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
        </div>
    </div>
</div>
</body>
</html>
