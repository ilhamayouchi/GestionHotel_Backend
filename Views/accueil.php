
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PALAIS REVES- Site d'hotel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    

    <!-- Google Web Fonts -->
   
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Views/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="Views/assets/llib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/Views/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/Views/assets/css/style.css" rel="stylesheet">
    <style>
    
        .hidden-event {
            display: none;
        }
      
        .video-container {
            position: relative;
            height: 100%;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-content {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .header-content h1 {
            font-size: 3em;
            margin: 0;
        }

        .header-content p {
            font-size: 1.2em;
        }
        .booking-bar {
    background-color:#c5a47e8e; /* Fond blanc légèrement transparent */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(219, 219, 219, 0.2);
    position: relative;
    margin: 50px auto; /* Centrer le formulaire */
    max-width: 800px; /* Largeur maximale */
    border: 1px solid #d9d9d9; /* Bordure légèrement grise */
}

.booking-fields {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap; /* Permet aux éléments de passer à la ligne */
}

.field {
    flex: 1;
    margin: 10px; /* Espacement entre les champs */
}

.field label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: larger;
    color: #ffffff; /* Couleur sombre pour le texte */
}

.field input,
.field select {
    width: 100%; /* Prendre toute la largeur */
    padding: 10px;
    border: 1px solid #ccc; /* Bordure grise */
    border-radius: 5px;
    font-size: 16px; /* Taille de police confortable */
}

.btn-reservation {
    background-color: #852929; /* Couleur dorée */
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    flex-basis: 100%; /* Prendre toute la largeur */
    margin-top: 10px; /* Espacement au-dessus du bouton */
    font-size: 18px; /* Taille de police plus grande */
    transition: background-color 0.3s; /* Effet de transition */
}

.btn-reservation:hover {
    background-color: #852929; /* Couleur dorée plus foncée au survol */
}

@media (max-width: 600px) {
    .booking-form {
        width: 95%; /* Formulaire plus large sur les petits écrans */
        padding: 15px; /* Moins de padding sur les petits écrans */
    }

    .btn-reservation {
        padding: 12px 25px; /* Bouton légèrement plus petit sur les petits écrans */
    }
}

            .rating {
                color: #FFD700;
                cursor: pointer;
            }
            
            .star {
                font-size: 1.5em;
            }
          


        .header-content {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }

        .header-content h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .header-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
       
    
</style>
    
    
   
</head>



<body>
    
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow py-lg-3">
            <div class="container">
                <a href="/Views/index.html" class="navbar-brand d-flex align-items-center">
                    <img class="img-fluid" src="/Views/img/PALIAS HOTEL.png" alt="Icon" style="width: 70px; height: 70px;">
                    
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-3 py-lg-0">
                        <a href="/Views/index.html" class="nav-item nav-link active">Home</a>
                        <a href="/Views/hébergement.html" class="nav-item nav-link ">Hébergement</a>
                        <a href="/Views/about.html" class="nav-item nav-link">Services</a>
                        <a href="/Views/gallerie.html" class="nav-item nav-link ">Gallerie</a>
                        <a href="/Views/events.html" class="nav-item nav-link ">Evénements Exclusif</a>
                        <a href="/Views/index.html#contact-section" class="nav-item nav-link">Contact</a>
                        <a  href="/Views/inscription.html" class="nav-item nav-link">Connexion</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    
        <div class="video-container">
            <video autoplay muted loop>
                <source src="/Views/img/211152_small.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la balise vidéo.
            </video>
    
            <div class="header-content">
                <h1>Bienvenue chez <span class="text-primary">PALAIS REVES</span></h1>
                <p>Découvrez le confort, l'élégance et un accueil chaleureux dans notre hôtel de luxe.</p>
                <div class="booking-bar">
                    <form>
                        <div class="booking-fields">
                            <div class="field">
                                <label for="arrival">Arrivée</label>
                                <input type="date" id="arrival" name="arrival" required>
                            </div>
                            <div class="field">
                                <label for="departure">Départ</label>
                                <input type="date" id="departure" name="departure" required>
                            </div>
                            <div class="field">
                                <label for="rooms">Chambres</label>
                                <select id="rooms" name="rooms" required>
                                    <option value="1">suite</option>
                                    <option value="2">Chambre</option>
                                    <option value="3">Appartement</option>
                                    
                                </select>
                            </div>
                            <div class="field">
                                <label for="guests">Invités</label>
                                <input type="number" id="guests" name="guests" placeholder="1" min="1" max="10" required>
                            </div>
                            <a href="/Views/Reservation.html" class="btn-reservation" style="text-decoration: none; padding: 10px 20px; background-color: #852929; color: white; border: none; border-radius: 5px; display: inline-block; text-align: center;">Réserver</a>

                        </div>
                    </form>
                </div>
            </div>
    
            <!-- Formulaire de réservation -->
            
        </div>
    </div>
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <div id="about-section">
                <div id="bgservices" class="container-xxl py-5">
                    <div id="bgservices"class=" rounded p-3">
                        <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                            <div class="container">
                                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                    <h1 class="mb-3">Hotel PALAIS REVES</h1>
                                    <p><strong>"Plus qu'un simple hôtel, Le Palais des Rêves incarne l'essence du Maroc. Chaque suite, un hommage à l'artisanat traditionnel, vous transporte dans un univers où luxe rime avec authenticité. Notre philosophie repose sur l'excellence et le raffinement, afin que chaque instant passé ici soit gravé dans votre mémoire. Imprégnez-vous des couleurs, des sons et des saveurs qui font vibrer le cœur du Royaume, tout en savourant une expérience hôtelière unique, où chaque détail est pensé pour votre bien-être."</strong></p>
                                </div>
                                <!-- Section des 12 images -->
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/morocco-484481_1280.jpg" class="img-fluid rounded" alt="Image 1">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/morocco-484481_1280.jpg" class="img-fluid rounded" alt="Image 2">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/ramadan-4159961_1280.jpg" class="img-fluid rounded" alt="Image 3">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/morocco-1046535_1280.jpg" class="img-fluid rounded" alt="Image 4">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/morocco-4030733_1280.jpg" class="img-fluid rounded" alt="Image 5">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="/Views/img/ramadan-3434919_1280.jpg" class="img-fluid rounded" alt="Image 6">
                                    </div>
                                    
                                </div> <!-- End of row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                          


        <!-- Search Start -->
        <!-- Section Actualités et Événements -->
        <section class="py-5 "id="bgpro">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-6">Nos Actualités et Événements</h2>
                    <p class="text-muted">Découvrez les dernières nouvelles et événements de notre hôtel</p>
                </div>
                
                <div id="eventsContainer" class="row g-4">

                    <div class="col-md-4">
                        <div  id="bgservices" class="testimonial-item  rounded p-3">
                        <div class="card h-100 shadow-sm">
                            <img src="/Views/img/Legends Lunch at Grand Hyatt.jpg" class="card-img-top" alt="Soirée Gastronomique">
                            <div class="card-body">
                                <h5 class="card-title">Soirée Gastronomique</h5>
                                <p class="card-text">Rejoignez-nous pour une soirée culinaire exceptionnelle avec notre chef étoilé.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">20 Janvier 2024</span>
                                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#reservationModal">
                                        Réserver
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Modal de réservation -->
                    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reservationModalLabel">Réservation - Soirée Gastronomique</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="reservationForm">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nom et Prénom</label>
                                            <input type="text" class="form-control" id="name" placeholder="Votre nom complet" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Adresse e-mail</label>
                                            <input type="email" class="form-control" id="email" placeholder="Votre e-mail" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Numéro de téléphone</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Votre numéro de téléphone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="guests" class="form-label">Nombre de personnes</label>
                                            <input type="number" class="form-control" id="guests" placeholder="Nombre de personnes" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Date de réservation</label>
                                            <input type="date" class="form-control" id="date" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-primary" id="confirmReservation">Confirmer la réservation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal de confirmation -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation de Réservation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="confirmationMessage">
                                    <!-- Message de confirmation ici -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Script JavaScript -->
                    <script>
                        document.getElementById('confirmReservation').addEventListener('click', function() {
                            // Récupérer les valeurs du formulaire
                            const name = document.getElementById('name').value;
                            const email = document.getElementById('email').value;
                            const phone = document.getElementById('phone').value;
                            const guests = document.getElementById('guests').value;
                            const date = document.getElementById('date').value;
                    
                            // Vérifier que tous les champs sont remplis
                            if (name && email && phone && guests && date) {
                                // Créer le message de confirmation
                                const message = `Réservation confirmée !\n\nNom : ${name}\nE-mail : ${email}\nTéléphone : ${phone}\nNombre de personnes : ${guests}\nDate : ${date}`;
                                
                                // Afficher le message dans la modal de confirmation
                                document.getElementById('confirmationMessage').innerText = message;
                    
                                // Afficher la modal de confirmation
                                $('#reservationModal').modal('hide');
                                $('#confirmationModal').modal('show');
                    
                                // Réinitialiser le formulaire
                                document.getElementById('reservationForm').reset();
                            } else {
                                alert('Veuillez remplir tous les champs.');
                            }
                        });
                    </script>
                    
                   
                    


    
                    <div class="col-md-4">
                     <div  id="bgservices" class="testimonial-item  rounded p-3">
                        <div class="card h-100 shadow-sm">
                            <img src="/Views/img/Fatigue _ 5 règles d'or pour augmenter son énergie.jpg" class="card-img-top" alt="Semaine Bien-Être">
                            <div class="card-body">
                                <h5 class="card-title">Semaine Bien-Être</h5>
                                <p class="card-text">Profitez de nos offres spéciales spa et séances de yoga pendant une semaine complète.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-success">15-22 Février 2024</span>
                                    <a href="https://www.paho.org/fr/campagnes/semaine-du-bien-etre-2024" class="btn btn-sm btn-outline-info">Détails</a>
                                </div>
                            </div>
                        </div>
                     </div> 
                    </div>
    
                    <div class="col-md-4">
                        <div  id="bgservices" class="testimonial-item  rounded p-3">
                        <div class="card h-100 shadow-sm">
                            <img src="/Views/img/Nasher Sculpture Garden.jpg" class="card-img-top" alt="Concert au Jardin">
                            <div class="card-body">
                                <h5 class="card-title">Concert au Jardin</h5>
                                <p class="card-text">Un concert intimiste dans nos magnifiques jardins avec des musiciens locaux.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">10 Mars 2024</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#concertModal">Billets</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                
    
                    <!-- Événements supplémentaires (cachés initialement) -->
                    <div id="additionalEvents" class="row g-4">
                        <div class="col-md-4 hidden-event">
                            <div  id="bgservices" class="testimonial-item  rounded p-3">
                            <div class="card h-100 shadow-sm">
                                <img src="/Views/img/Organisation de conventions, salons et séminaires d'entreprises.jpg" class="card-img-top" alt="Atelier Cuisine">
                                <div class="card-body">
                                    <h5 class="card-title">Atelier Cuisine</h5>
                                    <p class="card-text">Apprenez les secrets de la cuisine française avec notre chef de renommée.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-info">05 Avril 2024</span>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Inscription</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 hidden-event">
                            <div  id="bgservices" class="testimonial-item  rounded p-3">
                            <div class="card h-100 shadow-sm">
                                <img src="/Views/img/téléchargement (2).jpg" class="card-img-top" alt="Exposition Art">
                                <div class="card-body">
                                    <h5 class="card-title">Exposition d'Art Local</h5>
                                    <p class="card-text">Découvrez les talents artistiques de notre région dans notre hall principal.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-secondary">20-25 Avril 2024</span>
                                        <a href="#" class="btn btn-sm btn-outline-info">Visiter</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 hidden-event">
                            <div  id="bgservices" class="testimonial-item  rounded p-3">
                            <div class="card h-100 shadow-sm">
                                <img src="/Views/img/Soirée Dégustation de projets.jpg" class="card-img-top" alt="Dégustation Vin">
                                <div class="card-body">
                                    <h5 class="card-title">Soirée Dégustation de projets</h5>
                                    <p class="card-text">Parcours les projets locaux avec nos sommeliers experts.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-danger">12 Mai 2024</span>
                                        <a href="#" class="btn btn-sm btn-outline-warning">Réserver</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="text-center mt-5">
                    <button id="loadMoreEvents" class="btn btn-primary">Voir plus</button>
                    <button id="hideEvents" class="btn btn-secondary" style="display: none;">Masquer</button>
                </div>
            </div>
        </section>
       
       
     
        <!-- Bootstrap JS et Script Personnalisé -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const loadMoreBtn = document.getElementById('loadMoreEvents');
                const hideEventsBtn = document.getElementById('hideEvents');
                const additionalEvents = document.querySelectorAll('#additionalEvents .hidden-event');
    
                loadMoreBtn.addEventListener('click', function() {
                    // Afficher les événements supplémentaires
                    additionalEvents.forEach(event => {
                        event.classList.remove('hidden-event');
                    });
                    
                    // Cacher le bouton "Voir Tous les Événements"
                    loadMoreBtn.style.display = 'none';
                    // Afficher le bouton "Masquer les Événements"
                    hideEventsBtn.style.display = 'inline-block';
                });
    
                hideEventsBtn.addEventListener('click', function() {
                    // Masquer les événements supplémentaires
                    additionalEvents.forEach(event => {
                        event.classList.add('hidden-event');
                    });
                    
                    // Cacher le bouton "Masquer les Événements"
                    hideEventsBtn.style.display = 'none';
                    // Afficher le bouton "Voir Tous les Événements"
                    loadMoreBtn.style.display = 'inline-block';
                });
            });
        </script>
        
             
                     
        <div id="contact-section">
            <div class="container-xxl py-5">
                <div id="info-section" class="rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="container">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="mb-3">Contactons-nous</h1>
                                <p><strong>"Nous sommes à votre écoute !</strong><br>
                                    Pour toute question, demande d'information ou collaboration, n'hésitez pas à nous contacter. Votre satisfaction est notre priorité, et nous sommes là pour vous accompagner à chaque étape. Restons connectés !"</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="row gy-4">
                                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                            <div  id="info-section"class="rounded p-3">
                                                <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                                    </div>
                                                    <span>123 avenue Hassan 2, Marrakech, MAROC</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                            <div id="info-section" class=" rounded p-3">
                                                <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                                        <i class="fa fa-envelope-open text-primary"></i>
                                                    </div>
                                                    <span>PALAIS&REVES@gmail.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                            <div id="info-section" class=" rounded p-3">
                                                <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                                        <i class="fa fa-phone-alt text-primary"></i>
                                                    </div>
                                                    <span>05 23 34 57 75</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <iframe class="position-relative rounded w-100 h-100"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217406.30882524437!2d-8.303224715402372!3d31.634573878115532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2sMarrakesh%2C%20Morocco!5e0!3m2!1sen!2sbd!4v1733948343933!5m2!1sen!2sbd" 
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="col-md-6">
                                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                                        <p class="mb-4">Cette formule permet de vous aider à nous contacter</p>
                                        <form id="contactForm" onsubmit="showConfirmation(event)">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                                        <label for="name">Nom Complet</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                                                        <label for="subject">Objet</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                                        <label for="message">Message</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">ENVOYER</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="confirmationMessage" style="display:none; margin-top: 20px; color: green;">
                                            Nous avons reçu votre message, merci !
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function showConfirmation(event) {
                event.preventDefault(); // Empêche l'envoi du formulaire
                alert("Votre message a été envoyé avec succès !");
                document.getElementById('contactForm').reset(); // Réinitialise le formulaire
            }
        </script>


 <!-- Testimonial Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Avis et Témoignages:</h1>
            <p>Voici un espace des avis des clients sur notre hotel ajouter votre aussi</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div id="bgservices" class="testimonial-item  rounded p-3">
                <div class="bg-white border rounded p-4">
                    <p>"L'ambiance est à la fois élégante et relaxante, avec une décoration soignée qui nous plonge dans une expérience unique."</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/Views/assets/ img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Sabrina Collines</h6>
                            
                        
                        <div class="rating" id="rating">
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bgservices" class="testimonial-item  rounded p-3">
                <div class="bg-white border rounded p-4">
                    <p>"Les chambres étaient impeccables, spacieuses, et dotées de tout le confort nécessaire. On se sent comme à la maison !"</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/Views/assets/ img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Said Jad </h6>
                        
                        <div class="rating" id="rating">
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bgservices" class="testimonial-item rounded p-3">
                <div class="bg-white border rounded p-4">
                    <p>"Les chambres étaient impeccables, spacieuses, et dotées de tout le confort nécessaire. On se sent comme à la maison !"</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/Views/assets/ img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Said Jad </h6>
                        
                        <div class="rating" id="rating">
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
           
            
            <script>
                const CoutStars = document.querySelectorAll('.star');
                
                CoutStars.forEach((star, index) => {
                    star.addEventListener('click', () => { // Ajoutez l'écouteur d'événements sur chaque étoile
                        CoutStars.forEach((s, i) => {
                            // Change l'icône de l'étoile en fonction de l'indice
                            s.innerHTML = (i <= index) ? '&#9733;' : '&#9734;'; // &#9733; pour étoile pleine, &#9734; pour étoile vide
                        });
                    });
                });
            </script>
            
        </div> 
    </div>
 </div>          

        
        
               
  

        <!-- Footer Start -->
        <div class="container-fluid   footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Liens</h5>
                        <a  class="btn btn-link" href="index.html#bgservices">Notre Hotel</a>
                        <a  class="btn btn-link" href="index.html#bgpro">Actualités</a>
                        <a class="btn btn-link" href="index.html#contact-section">Contact </a>
                        <a class="btn btn-link" href="about.html">Services</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/img/hotel 1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/img/bali-2975787_1280.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/img/hotel 6.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/img/3D Model Interior Restaurant 80 Scenes File 3dsmax By Phuong Ha.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/img/res.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="/Views/assets/img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Une zone pour connecter directement.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"></a> All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://PALAIS_REVES.com">PALAIS_REVES</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Views/assets/lib/wow/wow.min.js"></script>
    <script src="/Views/assets/lib/easing/easing.min.js"></script>
    <script src="/Views/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/Views/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="/Views/assets/js/main.js"></script>
<script>
      
        // Action lorsque le bouton de réservation est cliqué
        document.getElementById('reserveButton').addEventListener('click', function () {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            if (name && email) {
                alert('Réservation confirmée pour ' + name + ' avec l\'email ' + email);
                // Fermer le modal après réservation
                var modal = new bootstrap.Modal(document.getElementById('concertModal'));
                modal.hide();
            } else {
                alert('Veuillez remplir tous les champs avant de réserver.');
            }
        });
    </script>
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>