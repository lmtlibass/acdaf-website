<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

        <!-- Alpine js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>

    <body class="font-sans antialiased">
        @include('shared.include.header')
        @include('shared.include.hero-section')
        <!-- Modal toggle -->

        <section id="partnair">
            <h2 class="text-2xl text-center mt-20 lg:text-2xl xl:text-2xl font-bold leading-none">
                Nos partenaires
            </h2>
            <div class="relative flex overflow-x-hidden">
                <div class="py-12 animate-marquee whitespace-nowrap flex flex-row">
                    <span class="mx-4 text-4xl"><img src="{{asset('assets/img/logo.png')}}" alt='logo'></span>
                    <span class="mx-4 text-4xl"><img src="{{asset('assets/img/logo.png')}}" alt='logo'></span>
                    <span class="mx-4 text-4xl"><img src="{{asset('assets/img/logo.png')}}" alt='logo'></span>
                    <span class="mx-4 text-4xl"><img src="{{asset('assets/img/logo.png')}}" alt='logo'></span>
                </div>
            </div>
        </section>

        <section class="pt-20 md:pt-20">
            <div class="container mx-auto px-8 lg:flex">
                <div class="text-center lg:text-left lg:w-1/2">
                    <h2 class="text-2xl lg:text-2xl xl:text-2xl font-bold leading-none">
                        Bienvenu dans ACDAF
                    </h2>
                    <p class="text-xl lg:text-2xl mt-6 font-light">Organisation altruiste née de la volonté
                        de défendre les
                        intérêts moraux et matériels du continent africain. Fondée en 2022 à l'université Cheikh Anta
                        Diop
                        de Dakar.</p>
                    <p class="mt-8 md:mt-12"><button type="button" class="
                    py-4 px-12
                    bg-[#09570a]
                    hover:bg-[#09570a77] rounded-full
                    text-white">En savoir plus</button>
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{asset('assets/img/welcom-img.gif')}}" alt="Bienvenue" class="h-96 object-cover">
                </div>
            </div>
        </section>
        <section id="derniersArticles">
            <div class="container">
                <h2 class="text-2xl text-center mt-20 lg:text-2xl xl:text-2xl font-bold leading-none">
                    Derniers articles
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-5 mx-auto items-center content-center">
                    <!-- component -->
                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>
                    <!-- component -->

                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>

                    <!-- component -->

                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>
                    <!-- component -->
                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="flex flex-initial mt-10 ml-5">
                    <a href="#" class="text-[#fff] p-4 rounded-3xl bg-[#09570a] text-sm font-bold">
                        Voir tout
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
        </section>
        <section id="derniersEvenements">
            <div class="container flex flex-col items-center content-center">
                <h2 class="text-2xl text-center mt-20 lg:text-2xl xl:text-2xl font-bold leading-none">
                    Derniers évènements
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 px-5 pb-5 mx-auto items-center content-center bg-gray-100">
                    <!-- component -->
                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>
                    <!-- component -->

                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>

                    <!-- component -->

                    <div class="block rounded-lg shadow-lg bg-white w-72 mt-32 mx-auto">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img class="rounded-lg  sm:m-h-64 md:h-64 w-full"
                                src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>

                        <div class="p-2">
                            <div class="flex justify-between">
                                <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                    Location Name
                                </h5>
                                <h5
                                    class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
                                    5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-4 h-4 ml-1">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </h5>
                            </div>
                            <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
                                Added X weeks ago
                            </p>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Date Range - Owner
                            </p>
                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
                                Price per night
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="flex flex-initial mt-10 ml-5">
                    <a href="#" class="text-[#fff] p-4 rounded-3xl bg-[#09570a] text-sm font-bold">
                        Voir tout
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
            </div>
        </section>
        <section id="cta">
            <div class="container-fluid">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 px-32 mx-auto justify-center">
                    <div class="text">
                        <h2 class="text-2xl cta-title mb-5 lg:text-2xl xl:text-2xl font-bold leading-none">
                            Rejoignez-nous
                        </h2>
                        <p class="cta-text">
                            Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Quisquam, voluptates.
                        </p>
                    </div>
                    <div class="btn text-end">
                        <button class="btn default-button-cta flex-1 gap-3">
                            <span>Adhérer</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactForm">
            <div class="container-fluid">
                <h2 class="text-2xl text-center mb-20 lg:text-2xl xl:text-2xl font-bold leading-none">
                    Contactez-nous 
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-32 px-32 mx-auto justify-center">
                    <div class="mb-5">
                        <form action="" method="post" class="contact-form">
                                <input
                                        class="appearance-none block w-full bg-white text-gray-700 border border-[#09570a] rounded py-3 px-4 mb-3 leading-tight focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="Prenom et Nom">                           
                            
                                <input type="email" id="email" name="email"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-[#09570a] rounded py-3 px-4 mb-3 leading-tight focus:bg-white"
                                    placeholder="Email">
                                
                                <textarea name="message" id="message"
                                    class="appearance-none block w-full bg-white text-gray-700 border border-[#09570a] rounded py-3 px-4 mb-3 leading-tight focus:bg-white"
                                    placeholder="Message"></textarea>
                            <button type="submit" class="btn default-button">
                                Envoyer
                            </button>
                        </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="contact-info">
                            <h5 class="contact-info-title mb-5">
                                Informations de contact
                            </h5>
                            <p class="contact-info-text mb-5">
                                Prêt à faire une différence tangible pour l'Afrique ? Rejoignez-nous dès maintenant
                            </p>
                            <p class="contact-info-text mb-5">
                                <i class="icon fas fa-map"></i> 1234 rue de la paix, Dakar, Sénégal
                            </p>
                            <p class="contact-info-text mb-5">
                                <i class="icon fas fa-phone"></i> +221 77 777 77 77
                            </p>
                            <p class="contact-info-text mb-5">
                                <i class="icon fas fa-envelope"></i>
                                acdaf@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('shared.include.footer')

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/header.js')}}"></script>
        <script src={{asset('assets/js/footer.js')}}></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>