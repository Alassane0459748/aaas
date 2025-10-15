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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Dakar Banlieue 06, Cité Assane DIOP
BP 13 492 Grand Yoff
</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+221.33867.16.95 </small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>ibrasow@aaas.com
                    </small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
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
            <h1 class="display-4 text-white animated zoomIn">Nos Missions</h1>
            <a href="" class="h5 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Nos missions</a>
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


  <!-- Objectifs Stratégiques Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Objectifs Stratégiques & Actions Prioritaires</h1>
            <p style="color: white;">Découvrez comment l'AAAS agit pour structurer et moderniser le secteur de l'assainissement au Sénégal.</p>
        </div>
        <div class="row g-4">

            <!-- Objectif 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-handshake fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Unir les acteurs</h5>
                    <p>Unir tous les intervenants du secteur de l’assainissement pour créer un front commun et solidaire.</p>
                </div>
            </div>

            <!-- Objectif 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-balance-scale fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Défense du secteur</h5>
                    <p>Défendre avec la plus haute priorité les intérêts de notre secteur auprès des autorités et partenaires.</p>
                </div>
            </div>

            <!-- Objectif 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-users-cog fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Ressources nécessaires</h5>
                    <p>Acquérir les moyens humains et matériels nécessaires à la réussite de nos activités.</p>
                </div>
            </div>

            <!-- Objectif 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-leaf fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Respect des normes</h5>
                    <p>Veiller au respect des normes environnementales et de la salubrité publique pour le bien de tous.</p>
                </div>
            </div>

            <!-- Action 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Formation & Formalisation</h5>
                    <p>Renforcer les capacités des acteurs pour améliorer la qualité des services et sortir de l'informel.</p>
                </div>
            </div>

            <!-- Action 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-bullhorn fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Communication & Sensibilisation</h5>
                    <p>Informer les populations sur les bonnes pratiques d'hygiène et les services existants, avec un focus sur les femmes.</p>
                </div>
            </div>

            <!-- Action 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-hand-paper fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Plaidoyer</h5>
                    <p>Mener des actions de plaidoyer auprès des décideurs pour influencer les politiques publiques du secteur.</p>
                </div>
            </div>

            <!-- Action 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-truck fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Modernisation</h5>
                    <p>Faciliter le renouvellement du parc de camions de vidange et la multiplication des stations de traitement des boues.</p>
                </div>
            </div>

            <!-- Action 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.7s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-cogs fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Innovation</h5>
                    <p>Créer des outils modernes comme un système de paiement e-money et une base de données pour analyser le secteur.</p>
                </div>
            </div>

            <!-- Approche inclusive -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.9s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Approche Inclusive & Locale</h5>
                    <p>Promouvoir le rôle des femmes et des jeunes locaux dans nos opérations pour un impact durable et équitable.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Objectifs Stratégiques End -->


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
                            <input type="email" class="form-control me-2 border-0 rounded" placeholder="Votre email">
                            <button class="btn btn-dark rounded">S'inscrire</button>
                        </form>
                        <div class="d-flex justify-content-center gap-2">
                            <a class="btn btn-light btn-square rounded-circle" href="#"><i class="fab fa-twitter text-primary"></i></a>
                            <a class="btn btn-light btn-square rounded-circle" href="#"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a class="btn btn-light btn-square rounded-circle" href="#"><i class="fab fa-linkedin-in text-primary"></i></a>
                            <a class="btn btn-light btn-square rounded-circle" href="#"><i class="fab fa-instagram text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-light mb-4">Contactez-Nous</h5>
                <div class="d-flex mb-3">
                    <i class="fa fa-map-marker-alt text-primary me-3"></i>
                    <p class="mb-0">Dakar Banlieue 06, Cité Assane DIOP
                    BP 13 492 Grand Yoff</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fa fa-envelope text-primary me-3"></i>
                    <p class="mb-0">ibrasow@aaas.com</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fa fa-phone text-primary me-3"></i>
                    <p class="mb-0">+221 33 867 16 95</p>
                </div>
                <div class="d-flex gap-3 mt-3">
                    <a class="btn btn-primary btn-sm rounded" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="#"><i class="fab fa-instagram"></i></a>
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
                &copy; 2025 <strong>AAAS</strong>. Tous droits réservés. 
                Design by <a class="text-white" href="https://htmlcodex.com" target="_blank">HTML Codex</a>, 
                Distributed by <a class="text-white" href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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
    <img src="img/aaas.jpeg" alt="Logo Aaas" class="site-logo">
</body>

</html>