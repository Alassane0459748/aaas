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
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+221338671695 </small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>ibrasow@aaas.com
                    </small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://x.com/AaasSenegal"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61582521535450"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/aaas-senegal-970a9738a/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-users me-2">
                </i>Aaas</h1>
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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="position: relative;">
            <img class="w-100" src="img/bac4.jpg" alt="Image" style="height: 800px; object-fit: cover;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <p class="slogan">
                        L'assainissement durable, notre engagement commun.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <!-- Navbar & Carousel End -->


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
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Bienvenue sur le site de l'AAAS, le regroupement des professionnels de l'assainissement au Sénégal.</h1>
                    </div>
                    <p class="mb-4" style="color: white;">Créée en 2007, notre association œuvre pour la structuration et la modernisation d'un secteur vital pour la santé publique et l'environnement. Forts de plus de 100 membres à travers le pays, nous nous engageons à professionnaliser nos métiers, à améliorer la qualité de nos services et à relever les défis de l'assainissement autonome, qui concerne 70% de la population sénégalaise. Découvrez nos missions, nos projets innovants et notre engagement pour un cadre de vie plus salubre pour tous.  
                    </p>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contactez-Nous </h5>
                            <h4 class="mb-0" style="color: white;">+221338671695</h4>
                        </div>
                    </div>
                   </div>
                   <div class="col-lg-5" style="min-height: 400px;">
    <div class="position-relative h-100">
        <img class="position-absolute w-100 h-100 rounded wow zoomIn"
             data-wow-delay="0.9s"
             src="img/aaas.jpeg"
             style="object-fit: contain; background-color: #f8f9fa; padding: 10px;">
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Services / Nos Missions Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Nos Missions</h1>
            <p class="mb-0" style="color: white;">Découvrez comment l'AAAS agit pour moderniser le secteur de l'assainissement au Sénégal.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-water fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Assainissement Autonome</h5>
                    <p>Promouvoir et encadrer l'assainissement autonome pour améliorer la santé publique et l'environnement.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Formation des Professionnels</h5>
                    <p>Structurer les métiers de l'assainissement à travers la formation et la professionnalisation des acteurs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card h-100 border-0 shadow rounded text-center p-4">
                    <i class="fa fa-leaf fa-3x text-primary mb-3"></i>
                    <h5 class="mb-3">Projets Durables</h5>
                    <p>Mettre en œuvre des projets innovants et durables pour garantir un cadre de vie plus salubre.</p>
                </div>
            </div>
        </div>
    </div>
     <!-- Bouton vers la page Actualités -->
     <div class="text-center mt-5">
            <a href="{{ route('missions') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                Voir toutes les missions <i class="fa fa-arrow-right ms-2"></i>
            </a>
        </div>
</div>
<!-- Services / Nos Missions End -->

<!-- Actualités Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="mb-3">Actualités</h1>
            <p class="mx-auto" style="max-width: 700px; color: white;">
                Découvrez les dernières nouvelles, initiatives et projets menés par l'Association des Acteurs de l'Assainissement du Sénégal. 
                Nous partageons ici les moments forts de notre engagement pour un environnement plus propre et durable.
            </p>
        </div>
        <div class="row g-4">
            <!-- Actu 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 border-0 shadow rounded overflow-hidden">
                    <img class="card-img-top" src="img/img1.jpg" alt="Actualité 1">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Journée de l'Assainissement 2025</h5>
                        <p class="card-text">
                            L'AAAS organise une journée nationale de sensibilisation à l'assainissement autonome et durable,
                            réunissant acteurs et partenaires du secteur.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Actu 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card h-100 border-0 shadow rounded overflow-hidden">
                    <img class="card-img-top" src="img/img6.jpg" alt="Actualité 2">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Formation des Professionnels</h5>
                        <p class="card-text">
                            Des sessions de formation sont organisées pour renforcer les compétences techniques et managériales 
                            des acteurs du secteur de l’assainissement.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Actu 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card h-100 border-0 shadow rounded overflow-hidden">
                    <img class="card-img-top" src="img/img2.jpg" alt="Actualité 3">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Projet Eau Propre</h5>
                        <p class="card-text">
                            Un projet innovant porté par l’AAAS pour améliorer l’accès à l’eau potable 
                            et renforcer les services d’assainissement dans les zones défavorisées.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton vers la page Actualités -->
        <div class="text-center mt-5">
            <a href="{{ route('actualites') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                Voir toutes les actualités <i class="fa fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>
<!-- Actualités End -->


<!-- Call to Action Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 text-center bg-primary text-white rounded shadow">
        <h2 class="mb-4">Rejoignez l'AAAS dès aujourd'hui !</h2>
        <p class="mb-4">Participez à nos projets et bénéficiez de toutes nos formations et ressources professionnelles.</p>
        <a href="{{route('contact')}}" class="btn btn-light btn-lg">Contactez-Nous</a>
    </div>
</div>
<!-- Call to Action End -->

   
    

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
                            <a class="btn btn-light btn-square rounded-circle" href="https://www.facebook.com/profile.php?id=61582521535450"><i class="fab fa-facebook-f text-primary"></i></a>
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
                    <a class="btn btn-primary btn-sm rounded" href="https://x.com/AaasSenegal"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-sm rounded" href="https://www.facebook.com/profile.php?id=61582521535450"><i class="fab fa-facebook-f"></i></a>
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
    <img src="img/logo2.jpeg" alt="Logo Aaas" class="site-logo">

</body>

</html>