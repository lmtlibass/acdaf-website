<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>A-CDAF</title>

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
          @vite('resources/css/app.css')
     </head>

     <body class="font-sans antialiased">
          @include('shared.include.header')
          <div class="container-fluid mb-5" style="background: url('{{asset('assets/img/hero.gif')}}'); height: 300px; width: 100%">
          </div>

          
          @yield('content')

          

          @include('shared.include.footer')

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
               integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
               crossorigin="anonymous"></script>
          <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('assets/js/header.js')}}"></script>
          <script src={{asset('assets/js/footer.js')}}></script>

     </body>

</html>