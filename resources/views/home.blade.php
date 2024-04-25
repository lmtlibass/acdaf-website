<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container-fluid">
            @include('shared.include.header')
        </div>
        <div class="container-fluid">
            @include('shared.include.hero-section')
        </div>
        <section id="partener">
            <h2 class="title mt-5">
                Nos partenaires
            </h2>
            <div class="container-fluid mt-5 py-2">
                <div class="mb-3  mt-5 partener-scroll-container">
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                    <div class="img-area">
                        <img src="https://placehold.co/100x100" alt="partner" class="partner-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="welcom">
            <div class="container-fluid px-5 mt-5">
                <div class="row welcom-section">
                    <div class="img-welcom col-12 col-md-6">
                        <img src="{{asset('assets/img/welcom-img.gif')}}" alt="Bienvenue" class="img-welcom-fluid">
                    </div>
                    <div class="text-welcom col-12 col-md-6">
                        <h2 class="text-welcom-title">
                            Bienvenue
                        </h2>
                        <p class="text-welcom-text">
                            Bienvenue à l'Alliance des Citoyens d'Afrique (ACDAF), une organisation altruiste née de la volonté de défendre les
                            intérêts moraux et matériels du continent africain. Fondée en 2022 à l'université Cheikh Anta Diop de Dakar, notre
                            mission s'étend à renforcer l'éducation des jeunes, promouvoir la citoyenneté et cultiver le leadership. Implantée à
                            Thiès, notre équipe dynamique œuvre avec dévouement, aspirant à élargir nos actions à travers de nouvelles sections,
                            invitant chacun à rejoindre cette communauté portée par l'innovation et la rigueur. Avec l'ACDAF, engageons-nous pour
                            l'avenir !
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="derniersArticles">
            <div class="container-fluid">
                <h2 class="title mt-5">
                    Derniers articles
                </h2>
                <div class="row mt-5 mx-auto">
                    <div class="col-12 col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://placehold.co/300x200" alt="article" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titre de l'article
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                                </p>
                                <a href="#" class="btn default-button">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://placehold.co/300x200" alt="article" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titre de l'article
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                                </p>
                                <a href="#" class="btn default-button">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://placehold.co/300x200" alt="article" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titre de l'article
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                                </p>
                                <a href="#" class="btn default-button">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://placehold.co/300x200" alt="article" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titre de l'article
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                                </p>
                                <a href="#" class="btn default-button">
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </section>
        <section id="cta">
            <div class="container-fluid">
                <div class="cta-section d-flex flex-row justify-content-around">
                    <div class="text">
                        <h2 class="cta-title">
                            Rejoignez-nous
                        </h2>
                        <p class="cta-text">
                            Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Quisquam, voluptates.
                        </p>
                    </div>
                    <div class="btn text-end">
                        <a href="#" class="btn default-button-cta">
                            Adhérer
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactForm">
            <div class="container-fluid">
                <h2 class="title">
                    Contactez-nous
                </h2>
                <div class="row mt-5 px-5">
                    <div class="col-12 col-md-6">
                        <form action="" method="post" class="contact-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Nom
                                </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">
                                    Message
                                </label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn default-button">
                                Envoyer
                            </button>
                        </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contact-info">
                            <h3 class="contact-info-title">
                                Informations de contact
                            </h3>
                            <p class="contact-info-text">
                                <i class="fas fa-map"></i> 1234 rue de la paix, Dakar, Sénégal
                            </p>
                            <p class="contact-info-text">
                                <i class="fas fa-phone"></i> +221 77 777 77 77
                            </p>
                            <p class="contact-info-text">
                                <i class="fas fa-envelope"></i>
                                acdaf@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/header.js')}}"></script>
    </body>
</html>
