@extends('pages.layouts')
@section('content')
<div class="container px-14">
     @include('shared.include.breadcumb', ['breadcrumbs' => $breadcrumbs])

     <div class="row">
          <h2 class="text-2xl text-center mb-20 mt-20 lg:text-2xl xl:text-2xl font-bold leading-none">
               Notre mission
          </h2>
          <div class="rounded overflow-hidden flex flex-col sm:flex-col md:flex-row lg:flex-row gap-12">
               <div class="flexinitial">
                    <p class="text-justify">
                         L'Alliance- les Citoyens d'Afrique de son acronyme ACDAF est une organisation à but non lucratif,
                         fondée au Sénégal le
                         29 mai 2022 à l'université Cheikh Anta Diop de Dakar conformément au code des obligations civiles et
                         commerciales.<br>
                    
                    
                         Nous travaillons sur un projet de société embitionnant à défendre les intérêts matériels et moraux
                         du continent
                         africain. Notre organisation s'attache à renforcer l'éducation des jeunes, à promouvoir la
                         citoyenneté, l'enseignement
                         des valeurs, à assister les jeunes africains d'où ils viennent à développer leur compétence en
                         leadership et <br>
                         développement personnel.
                    
                         Notre siège social se situe à Thiès/ Nguinth boulevard et peut être transféré à tout autre lieu du
                         territoire national.
                    
                         Le fonctionnement de notre organisation est assurée par une équipe dynamique composée d'hommes et de
                         femmes dévoués
                         répartis dans le pays, dans la sous région africaine et au niveau international. <br>
                    
                         L' ACDAF est composée d'un comité directeur, d'un bureau exécutif, de commissaires aux comptes et de
                         commissions
                         techniques. <br>
                    
                         Nous disposons également d'un pool d'encradreurs dévoués, dégourdis et rompus à la tâche qui
                         travaille en étroite
                         collaboration avec notre coordination de recherche pour assurer un meilleur encadrement de nos
                         membres. <br>
                    
                         Nos réalisations sont fécondes et probantes. Aujourd'hui, nous aspirons élargir le programme partout
                         au Sénégal et dans
                         la sous région par la création de nouvelle section. <br>
                    
                         Au demeurant, chers compatriotes, n'hésitez pas à nous rejoindre dans cette communauté ou
                         l'innovation, l'empathie et la
                         rigueur seront nos carburants. ACDAF, un engagement pour la postérité ! <br>
                    </p>
               </div>
               <div class="flex-initial max-w-fit">
                    <img src="{{asset('assets/img/mission.jpeg')}}" alt="Mission" class=" max-w-lg max-h-sm rounded-md">
               </div>
          </div>
     </div>
</div>
@endsection