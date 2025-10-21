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
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61582521535450"><i class="fab fa-facebook-f fw-normal"></i></a>
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
            <h1 class="display-4 text-white animated zoomIn">A propos</h1>
            <a href="" class="h5 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">A propos</a>
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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">​Notre Histoire
                        </h1>
                    </div>
                    <p class="mb-4" style="color: white;">​L’Association des Acteurs de l’Assainissement du Sénégal (AAAS) a été fondée en 2007 à l'initiative des propriétaires de camions de vidange. Reconnue officiellement le 10 septembre 2008 à Dakar sous le récépissé N°13557/MINT/DAGAT, l'AAAS est une association à but non lucratif. Initialement un regroupement de vidangeurs, elle s'est aujourd'hui élargie pour inclure tous les acteurs de la filière assainissement.  
                    </p>
                    </div>
                    <div class="col-lg-5" style="min-height: 100px;">
    <div class="d-flex align-items-center justify-content-center h-100 w-100" style="background-color: #fff; border-radius: 10px; overflow: hidden;">
        <img src="img/aaas.jpeg"
             alt="Image AAAS"
             class="wow zoomIn"
             data-wow-delay="0.9s"
             style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: inherit;">
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- About End -->
   <!-- Équipe de direction Start -->
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0 text-primary">Notre Équipe de Direction</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <!-- Directeur -->
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                <div class="team-item bg-white rounded shadow overflow-hidden text-center p-4 h-100">
                    <div class="position-relative mx-auto mb-4" style="width: 300px; height: 300px;">
                        <img class="img-fluid rounded-circle border border-3 border-primary w-100 h-100 object-fit-cover" 
                             src="img/dg.jpeg" 
                             alt="Directeur AAAS">
                    </div>
                    <h4 class="text-primary mb-1">Ibra Sow</h4>
                    <p class="text-muted mb-3">Président Directeur Général</p>
                    <p class="text-dark" style="font-size: 0.95rem;">
                        M. Ibra Sow dirige l’AAAS depuis sa création. Visionnaire et engagé, il œuvre pour la
                        professionnalisation des acteurs de l’assainissement et le renforcement du secteur à l’échelle nationale.
                    </p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-outline-primary btn-square rounded-circle me-2" href="https://x.com/AaasSenegal"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61582521535450"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square rounded-circle" href="https://www.linkedin.com/in/aaas-senegal-970a9738a/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- Secrétaire -->
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="team-item bg-white rounded shadow overflow-hidden text-center p-4 h-100">
                    <div class="position-relative mx-auto mb-4" style="width: 300px; height: 300px;">
                        <img class="img-fluid rounded-circle border border-3 border-primary w-100 h-100 object-fit-cover" 
                             src="img/se.jpeg" 
                             alt="Secrétaire AAAS">
                    </div>
                    <h4 class="text-primary mb-1">Mamadou Ndiour</h4>
                    <p class="text-muted mb-3">Secrétaire Générale</p>
                    <p class="text-dark" style="font-size: 0.95rem;">
                        M. Mamadou Ndiour assure la coordination administrative et la gestion des projets de l’association, 
                        avec un engagement constant pour la transparence et la bonne gouvernance.
                    </p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-outline-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Équipe de direction End -->


 <!-- Features Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">À propos de l'AAAS
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-dark rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Notre Vision : Un Projet de Société
                            </h4>
                            <p class="mb-0" style="color: white;">​Notre objectif général est de bâtir une organisation forte, composée de membres formés et formalisés, afin de rentabiliser nos activités et de transformer positivement le secteur. Nous sommes conscients que la majorité des acteurs évoluent dans l'informel avec un personnel non qualifié. C'est pourquoi nos priorités incluent la formation, la formalisation des entreprises et l'accès au crédit pour le renforcement des capacités humaines et matérielles.  
                            </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-dark rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>​Nos Membres
                            </h4>
                            <p class="mb-0" style="color: white;">À ce jour, l'AAAS est fière de compter plus de cent (100) membres répartis dans toutes les régions du Sénégal. Collectivement, nos membres gèrent une flotte d'environ deux cent cinquante (250) camions hydrocureurs, jouant un rôle essentiel dans la salubrité publique.  
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/re.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-dark rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>​Nos Domaines d'Intervention
                            </h4>
                            <p class="mb-0" style="color: white;">Nos compétences sont variées et couvrent l'ensemble de la chaîne de l'assainissement:<br>  
                                ​Vidange des fosses septiques.<br>  
                                ​Entretien et curage de réseaux d’assainissement (eaux usées et pluviales).<br>  
                                ​Entretien de stations de traitement des boues de vidange.<br>  
                                ​Nettoyage industriel.<br>  
                                ​Pompage et transport des huiles usagées.<br>  
                                ​Pompage des eaux de pluies.  </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-dark rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>​Nos Partenaires
                            </h4>
                            <p class="mb-0" style="color: white;">​La réussite de nos missions repose sur une collaboration étroite avec les acteurs institutionnels et locaux. Nous travaillons en lien étroit avec l'Office National de l'Assainissement du Sénégal (ONAS), et nous sommes impliqués dans tous les programmes et projets mis en œuvre par ce dernier. Nous collaborons également avec les mairies, les associations de quartiers et des partenaires techniques et financiers internationaux.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

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