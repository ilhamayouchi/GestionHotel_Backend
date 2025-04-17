<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - PALAIS REVES</title>
  <style>
    /* Variables et couleurs */
    :root {
      --primary-color: #852929;
      --primary-light: #a33434;
      --gold: #c5a47e;
      --cream: #f5f5f0;
      --dark: #333;
      --light-gray: #f9f9f9;
      --medium-gray: #ddd;
    }

    /* Style global */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background-color: var(--cream);
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

    /* Conteneur principal */
    main {
      flex: 1;
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 40px 20px;
    }

    /* Carte d'inscription */
    .auth-container {
      display: flex;
      margin: 0 auto;
      max-width: 900px;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .auth-image {
      flex: 1;
      background-image: url('/Views/img/g26\ -\ Copie.jpg');
      background-size: cover;
      background-position: center;
      min-height: 500px;
    }

    .auth-form {
      flex: 1;
      padding: 40px;
    }

    /* Titre et sous-titre */
    .title {
      font-size: 28px;
      font-weight: 600;
      color: var(--primary-color);
      margin-bottom: 10px;
      text-align: center;
    }

    .subtitle {
      font-size: 16px;
      color: #666;
      margin-bottom: 30px;
      text-align: center;
    }

    /* Style du formulaire */
    .form-content {
      margin-top: 30px;
    }

    .user-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .input-box {
      width: calc(50% - 10px);
      margin-bottom: 20px;
    }

    .input-box.full-width {
      width: 100%;
    }

    .details {
      display: block;
      font-weight: 500;
      margin-bottom: 8px;
      color: var(--dark);
    }

    .input-box input, .input-box select {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid var(--medium-gray);
      border-radius: 5px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    .input-box input:focus, .input-box select:focus {
      border-color: var(--primary-color);
      outline: none;
    }

    .password-field {
      position: relative;
    }

    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #666;
    }

    /* Style des règles de mot de passe */
    .password-rules {
      margin-top: 5px;
      font-size: 12px;
      color: #666;
    }

    .password-rule {
      display: flex;
      align-items: center;
      margin-bottom: 3px;
    }

    .password-rule.valid .rule-icon {
      color: green;
    }

    .rule-icon {
      margin-right: 5px;
      color: #999;
    }

    /* Conditions et consentement */
    .terms-container {
      margin: 15px 0;
      display: flex;
      align-items: flex-start;
    }

    .terms-container input {
      margin-right: 10px;
      margin-top: 4px;
    }

    .terms-container label {
      font-size: 14px;
      color: #666;
    }

    .terms-container a {
      color: var(--primary-color);
      text-decoration: none;
    }

    .terms-container a:hover {
      text-decoration: underline;
    }

    /* Boutons */
    .button-container {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 25px;
    }

    .button {
      width: 100%;
      padding: 12px 0;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: white;
    }

    .btn-primary:hover {
      background-color: var(--primary-light);
    }

    .btn-outline {
      background-color: transparent;
      border: 1px solid var(--primary-color);
      color: var(--primary-color);
    }

    .btn-outline:hover {
      background-color: var(--cream);
    }

    /* Séparateur */
    .separator {
      display: flex;
      align-items: center;
      margin: 20px 0;
    }

    .separator-line {
      flex: 1;
      height: 1px;
      background-color: var(--medium-gray);
    }

    .separator-text {
      padding: 0 15px;
      color: #666;
      font-size: 14px;
    }

    /* Options de connexion sociale */
    .social-options {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 25px;
    }

    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 1px solid var(--medium-gray);
      background-color: white;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .social-btn:hover {
      background-color: var(--light-gray);
    }

    .social-btn img {
      width: 25px;
      height: 25px;
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

    /* Footer */
    .footer {
      background-color: var(--gold);
      color: white;
      padding: 10px 0;
      margin-top: auto;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-section {
      flex: 1;
      padding: 5px;
      min-width: 150px;
    }

    .footer-section h5 {
      font-size: 1.1em;
      margin-bottom: 5px;
    }

    .footer-section p, .footer-section a {
      margin-bottom: 3px;
      color: white;
      text-decoration: none;
    }

    .footer-link:hover {
      text-decoration: underline;
    }

    .social-media {
      margin-top: 5px;
    }

    .social-btn-footer {
      margin-right: 5px;
      color: white;
      font-size: 18px;
    }

    .newsletter {
      display: flex;
    }

    .newsletter input {
      flex: 1;
      padding: 3px;
      border: none;
      border-radius: 5px 0 0 5px;
    }

    .newsletter button {
      padding: 3px 8px;
      background-color: var(--primary-light);
      border: none;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      color: white;
    }

    .newsletter button:hover {
      background-color: var(--primary-color);
    }

    .copyright {
      text-align: center;
      padding: 5px 0;
      border-top: 1px solid white;
      margin-top: 5px;
    }

    .footer-menu {
      margin-top: 5px;
    }

    .footer-menu a {
      color: white;
      margin: 0 5px;
      text-decoration: none;
    }

    .footer-menu a:hover {
      text-decoration: underline;
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .auth-container {
        flex-direction: column;
      }

      .auth-image {
        display: none;
      }
      
      .input-box {
        width: 100%;
      }
      
      .footer-container {
        flex-direction: column;
        align-items: center;
      }
      
      .footer-section {
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
      }
      
      .newsletter {
        width: 100%;
      }

      .nav-links {
        display: none;
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

  <!-- Contenu principal -->
  <main>
    <div class="auth-container">
      <div class="auth-image"></div>
      <div class="auth-form">
        <div class="title">Créer votre compte</div>
        <div class="subtitle">Rejoignez-nous pour découvrir des expériences exclusives</div>

        <!-- Options de connexion sociale -->
        <div class="social-options">
          <button class="social-btn">
            <img src="/api/placeholder/25/25" alt="Google">
          </button>
          <button class="social-btn">
            <img src="/api/placeholder/25/25" alt="Facebook">
          </button>
          <button class="social-btn">
            <img src="/api/placeholder/25/25" alt="Apple">
          </button>
        </div>

        <!-- Séparateur -->
        <div class="separator">
          <div class="separator-line"></div>
          <div class="separator-text">ou inscrivez-vous avec un email</div>
          <div class="separator-line"></div>
        </div>
        <!-- PHP -->
        <?php if (isset($_SESSION['flash_message'])): ?>
          <div class="alert">
              <?= $_SESSION['flash_message'] ?>
              <?php unset($_SESSION['flash_message']); ?>
          </div>
      <?php endif; ?>
        <!-- Formulaire d'inscription -->
        <form class="form-content" method="POST" action="index.php?action=register">
          <div class="user-details">
            <!-- Prénom et Nom -->
            <div class="input-box">
              <span class="details">Prénom</span>
              <input name="prenom" type="text" placeholder="Votre prénom" required>
            </div>
            <div class="input-box">
              <span class="details">Nom</span>
              <input name="nom" type="text" placeholder="Votre nom" required>
            </div>
            
            <!-- Email -->
            <div class="input-box full-width">
              <span class="details">Email</span>
              <input name="email" type="email" placeholder="Votre adresse email" required>
            </div>
            
            <!-- Téléphone -->
            <div class="input-box full-width">
              <span class="details">Téléphone</span>
              <input name="telephone" type="tel" placeholder="Votre numéro de téléphone" required>
            </div>
            
            <!-- Mot de passe -->
            <div class="input-box">
              <span class="details">Mot de passe</span>
              <div class="password-field">
                <input name="mot_de_passe" type="password" id="password" placeholder="Créez un mot de passe" required>
              </div>
              <div class="password-rules">
                <div class="password-rule">
                  <span class="rule-icon">⚪</span>
                  <span>Au moins 8 caractères</span>
                </div>
                <div class="password-rule">
                  <span class="rule-icon">⚪</span>
                  <span>Une lettre majuscule</span>
                </div>
                <div class="password-rule">
                  <span class="rule-icon">⚪</span>
                  <span>Un caractère spécial</span>
                </div>
              </div>
            </div>
            
            <!-- Confirmation du mot de passe -->
            <div class="input-box">
              <span class="details">Confirmer le mot de passe</span>
              <div class="password-field">
                <input type="password" placeholder="Confirmez votre mot de passe" required>
              </div>
            </div>
          </div>
          
          <!-- Conditions d'utilisation -->
          <div class="terms-container">
            <input type="checkbox" id="terms" required>
            <label for="terms">J'accepte les <a href="#">Conditions d'utilisation</a> et la <a href="#">Politique de confidentialité</a></label>
          </div>
          
          <!-- Newsletter -->
          <div class="terms-container">
            <input type="checkbox" id="newsletter">
            <label for="newsletter">Je souhaite recevoir des offres exclusives et des nouvelles par email</label>
          </div>
          
          <!-- Bouton d'inscription -->
          <div class="button-container">
            <button type="submit" class="button btn-primary">S'inscrire</button>
            <button type="button" class="button btn-outline" onclick="window.location.href='index.html';">Retour à l'accueil</button>
          </div>
        </form>
        
        <!-- Lien vers la connexion -->
        <div class="toggle-auth">
          Vous avez déjà un compte? <a href="inscription.html">Se connecter</a>
        </div>
      </div>
    </div>
  </main>
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

  