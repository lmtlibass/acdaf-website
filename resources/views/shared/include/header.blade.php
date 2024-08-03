<header>   
     <nav id="nav" class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-none h-20 content-center border-gray-200 dark:border-gray-600">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4">
               <a href="{{route('home')}}/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{asset('assets/img/logo.png')}}" alt="ACDAF" class="img-logo float-left">
               </a>
               <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse items-center content-center">
                    <button class="default-button btn h-9">Faire un don</button>
                    <div class="menu" id="menu">
                         <div>
                              <span class="line-1"></span>
                              <span class="line-2"></span>
                              <span class="line-3"></span>
                         </div>
                    </div>
               </div>
          </div>
          <div id="menuArea">
               <div class="mega-menu flex flex-row flex-wrap content-center justify-between">
                    <div class="col-4 mega-menu-item">
                         <h4 class="mega-menu-item-title mb-3">A propos</h4>
                         <ul class="flex flex-column">
                              <li><a href="{{route('quisommenous')}}">Qui sommes nous</a></li>
                              <li><a href="{{route('mission')}}">Missions</a></li>
                              <li><a href="{{route('vision')}}">Visions & Valeurs</a></li>
                         </ul>
                    </div>
                    <div class="col-4 mega-menu-item">
                         <h4 class="mega-menu-item-title mb-3">Evenement</h4>
                         <ul>
                              <li><a href="#">A venir</a></li>
                              <li><a href="#">Evènement</a></li>
                              <li><a href="#">Galerie d'image</a></li>
                         </ul>
                    </div>
                    <div class="col-4 mega-menu-item">
                         <h4 class="mega-menu-item-title mb-3">Contact</h4>
                         <ul>
                              <li><a href="#">Nous contacter</a></li>
                              <li><a href="#">Partenariat</a></li>
                              <li><a href="#">Nous rejoindre</a></li>
                         </ul>
                    </div>
               </div>
          
               <h4 class="mega-menu-item-title mb-4 ml-3">Nos articles</h4>
               <div class="flex flex-row justify-between gap-2">
                    <a href="#"
                         class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                         style="background-image: url(/docs/images/dashboard-overview.png)">
                         <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new Flowbite
                              dashboard
                              navigation.</p>
                         <button type="button"
                              class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                              Get started
                              <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                   fill="none" viewBox="0 0 14 10">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                              </svg>
                         </button>
                    </a>
                    <a href="#"
                         class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                         style="background-image: url(/docs/images/dashboard-overview.png)">
                         <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new Flowbite
                              dashboard
                              navigation.</p>
                         <button type="button"
                              class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                              Get started
                              <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                   fill="none" viewBox="0 0 14 10">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                              </svg>
                         </button>
                    </a>
                    <a href="#"
                         class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                         style="background-image: url(/docs/images/dashboard-overview.png)">
                         <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new Flowbite
                              dashboard
                              navigation.</p>
                         <button type="button"
                              class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                              Get started
                              <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                   fill="none" viewBox="0 0 14 10">
                                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                              </svg>
                         </button>
                    </a>
               </div>
               <div class="mega-menu-icon-rs p-6 flex flex-row justify-between items-center content-center">
                    <a href="#" class="text-success"><i class="fab fa-facebook text-success"></i>
                         <span class="ml-3">Facebook</span>
                    </a>
                    <a href="#" class="text-success"><i class="fab fa-twitter text-success"></i>
                         <span class="ml-3">Instagram</span>
                    </a>
                    <a href="#" class="text-success"><i class="fab fa-instagram text-success"></i>
                         <span class="ml-3">Twitter</span>
                    </a>
                    <a href="#" class="text-success"><i class="fab fa-linkedin-in text-success"></i>
                         <span class="ml-3">Youtube</span>
                    </a>
               </div>
          </div>
     </nav>
</header>