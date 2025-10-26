<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Association des Acteurs de l'Assainissement du Sénégal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/aaas.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


     <!-- Topbar Start -->
     <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Maristes lot N°R22 DAKAR-Senegal,
</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+221.33867.16.95 </small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>infos@aaas.com
                    </small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://x.com/AaasSenegal"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://web.facebook.com/profile.php?id=61582721228095&viewas=&show_switched_toast=false&show_switched_tooltip=false&is_tour_dismissed=false&is_tour_completed=false&show_podcast_settings=false&show_community_review_changes=false&should_open_composer=false&badge_type=NEW_MEMBER&show_community_rollback_toast=false&show_community_rollback=false&show_follower_visibility_disclosure=false&bypass_exit_warning=true"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/aaas-senegal-970a9738a/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-users me-2"></i>Aaas</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Accueil</a>
                    <a href="{{route('a-propos')}}" class="nav-item nav-link">A propos</a>
                    <a href="{{route('missions')}}"  class="nav-item nav-link">Nos missions</a>
                    <a href="{{route('partenaires')}}"  class="nav-item nav-link">Nos partenaires</a>
                    <a href="{{route('actualites')}}"  class="nav-item nav-link">Actualités</a>
                    <a href="{{route('evenements')}}"  class="nav-item nav-link">Evenements</a>
                    <a href="{{route('contact')}}"  class="nav-item nav-link">Contact</a>
                </div>
               </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" 
     style="margin-bottom: 90px; 
            background-image: url('img/bac2.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            position: relative;">
    
    <!-- Overlay semi-transparent pour le texte -->
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5);"></div>
    
    <div class="row py-5" style="position: relative; z-index: 1;">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Actualités</h1>
            <a href="" class="h5 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Actualités</a>
        </div>
    </div>
</div>

    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


<!-- Actualités Start -->
<div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="text-center mb-5">
        <h1 class="mb-3">Nos Actualités</h1>
        <p style="color: white;">Découvrez les projets récents, partenariats et initiatives de l'AAAS pour un assainissement durable au Sénégal.</p>
    </div>

    <div class="row g-4">
        <!-- ACTU 1 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 border-0 shadow-sm rounded overflow-hidden">
                <img src="img/img9.jpeg" class="card-img-top" alt="Projet Ma Vidange"
                     style="height: 250px; width: 100%; object-fit: cover; object-position: center;">
                <div class="card-body p-4">
                    <h5 class="card-title text-primary">Projet "Ma Vidange" : L'innovation au service des usagers</h5>
                    <p class="card-text">
                        En partenariat avec l'ONAS, l'AAAS développe l'application mobile "Ma Vidange". Cette plateforme interactive permettra aux usagers de commander une vidange en quelques clics et de contacter le camion le plus proche grâce à un système de géolocalisation. Pour les professionnels, l'application sera un puissant outil de gestion de flotte, d'optimisation des trajets et de suivi comptable grâce aux modules de paiement intégrés (Mobile Money, Carte bancaire).
                    </p>
                </div>
            </div>
        </div>

        <!-- ACTU 2 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card h-100 border-0 shadow-sm rounded overflow-hidden">
                <img src="img/n3.jpeg" class="card-img-top" alt="Projet PARC"
                     style="height: 250px; width: 100%; object-fit: cover; object-position: center;">
                <div class="card-body p-4">
                    <h5 class="card-title text-primary">Le PARC : Renouvellement des Camions de Vidange</h5>
                    <p class="card-text">
                        L'AAAS est partenaire du <strong>Projet d’Appui au Renouvellement des Camions de vidange (PARC)</strong> lancé le 18 février 2021. Ce projet majeur vise à remplacer les véhicules vétustes par 254 camions neufs, avec un coût global de 12 milliards de FCFA sur 5 ans. Il s'agit d'une étape cruciale pour améliorer la qualité et la sécurité du service de vidange au Sénégal.
                    </p>
                </div>
            </div>
        </div>

        <!-- ACTU 3 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="card h-100 border-0 shadow-sm rounded overflow-hidden">
                <img src="img/img3.jpg" class="card-img-top" alt="Programme PSMBV"
                     style="height: 250px; width: 100%; object-fit: cover; object-position: center;">
                <div class="card-body p-4">
                    <h5 class="card-title text-primary">Le PSMBV : Structurer le Marché des Boues de Vidange</h5>
                    <p class="card-text">
                        L'association est à la fois acteur et bénéficiaire du Programme de Structuration du Marché des Boues de Vidange (PSMBV). Ce programme vise à :  
                        ​Encourager le développement du secteur privé de l'assainissement.  
                        ​Augmenter la demande pour les services de vidange mécanique.  
                        ​Améliorer la qualité du service offert par les opérateurs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Actualités End -->

     <!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 pt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <!-- À propos -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-primary text-white h-100 shadow rounded">
                    <div class="card-body text-center p-4">
                        <a href="index.html" class="navbar-brand mb-3 d-block">
                            <h1 class="m-0 text-white"><i class="fa fa-users me-2"></i>AAAS</h1>
                        </a>
                        <p class="mb-4" style="font-size: 0.95rem;">
                            L'AAAS regroupe les professionnels de l'assainissement au Sénégal et œuvre pour la modernisation du secteur, la qualité des services et le bien-être de la population.
                        </p>
                        <form class="d-flex mb-3" action="">
                            <input type="email" class="form-control me-2 border-0 rounded" placeholder="Commentez">
                            <button class="btn btn-dark rounded">Envoyer</button>
                        </form>
                        <div class="d-flex justify-content-center gap-2">
                            <a class="btn btn-light btn-square rounded-circle" href="https://x.com/AaasSenegal"><i class="fab fa-twitter text-primary"></i></a>
                            <a class="btn btn-light btn-square rounded-circle" href="https://web.facebook.com/profile.php?id=61582721228095&viewas=&show_switched_toast=false&show_switched_tooltip=false&is_tour_dismissed=false&is_tour_completed=false&show_podcast_settings=false&show_community_review_changes=false&should_open_composer=false&badge_type=NEW_MEMBER&show_community_rollback_toast=false&show_community_rollback=false&show_follower_visibility_disclosure=false&bypass_exit_warning=true"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a class="btn btn-light btn-square rounded-circle" href="https://www.linkedin.com/in/aaas-senegal-970a9738a/"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-light mb-4">Contactez-Nous</h5>
                <div class="d-flex mb-3">
                    <i class="fa fa-map-marker-alt text-primary me-3"></i>
                    <p class="mb-0">Maristes lot N°R22 DAKAR-Senegal,</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fa fa-envelope text-primary me-3"></i>
                    <p class="mb-0">infos@aaas.com</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fa fa-phone text-primary me-3"></i>
                    <p class="mb-0">+221 33 867 16 95</p>
                </div>
                <div class="d-flex gap-3 mt-3">
                    <a class="btn btn-primary btn-sm rounded" href="https://x.com/AaasSenegal"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="https://web.facebook.com/profile.php?id=61582721228095&viewas=&show_switched_toast=false&show_switched_tooltip=false&is_tour_dismissed=false&is_tour_completed=false&show_podcast_settings=false&show_community_review_changes=false&should_open_composer=false&badge_type=NEW_MEMBER&show_community_rollback_toast=false&show_community_rollback=false&show_follower_visibility_disclosure=false&bypass_exit_warning=true"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="https://www.linkedin.com/in/aaas-senegal-970a9738a/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Liens rapides -->
            <div class="col-lg-4 col-md-12 mb-4">
                <h5 class="text-light mb-4">Liens utiles</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="{{route('home')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>Accueil</a>
                    <a href="{{route('a-propos')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>À propos</a>
                    <a href="{{route('missions')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>Nos Missions</a>
                    <a href="{{route('actualites')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>Actualites</a>
                    <a href="{{route('evenements')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>Evenements</a>
                    <a href="{{route('contact')}}" class="text-light text-decoration-none"><i class="fa fa-angle-right text-primary me-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center py-3">
        <p class="mb-0" style="font-size: 0.9rem;">
            &copy; 2025 <strong>AAAS Sénégal</strong>. Tous droits réservés.  
            Association des Acteurs de l’Assainissement du Sénégal – Engagement pour la modernisation du secteur et la qualité des services.
        </p>
    </div>
</div>

</div>
<!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <div class="logo-card">
    <img src="img/logo.jpeg" alt="Logo Aaas" class="site-logo">
</div>

<style>
/* Card fixe en bas à droite */
.logo-card {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px; /* taille totale du card réduite */
    height: 60px;
    border-radius: 15px;
    overflow: hidden; /* pour que le logo suive les bords arrondis */
    box-shadow: 0 3px 10px #27D3F5;
    z-index: 1000;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #27D3F5; /* couleur de fond au cas où l'image ne charge pas */
}

/* Effet au survol */
.logo-card:hover {
    transform: scale(1.07);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
}

/* Logo zoomé fortement pour centrer le motif principal */
.site-logo {
    width: 160%;          
    height: 160%;
    object-fit: cover;
    object-position: center;
    display: block;
    transform: translate(-16%, -16%); /* recadre pour centrer visuellement le milieu du logo */
}

</style>
</body>

</html>