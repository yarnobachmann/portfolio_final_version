
<!doctype html>
<html lang="nl">
    <head data-enhance="false">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="woord, anderwoord, nogeenwoord">
        <meta name="description" content="">

        <link rel="icon" href="{{ asset('/img/logo/favicon.png') }}" type="image/x-icon" />

        <title>Yarno | @yield('title')</title>

        <!-- <link rel="icon" href="{{ URL::asset('/images/') }}"> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81239607-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-81239607-2');
</script>

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/normalize/css/normalize.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/animate/css/animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}" />
        @yield('css')
    </head>
    <body>
        <!-- start of the page content -->
        <div style="height: 100%; width: 100%; padding: 0; margin: 0;" data-enhance="false" data-role="page">
            <div class="row" style="height: 100vh; width: 100vw; margin: 0; padding: 0;">
              <!-- loader -->
              <div class="loader"> <img src="/img/page_loader.gif" class="image" style="" alt=""> </div>
                @yield('content')
            </div>
        </div>

        <!-- js includes -->
        <script src="{{ URL::asset('/plugins/unitegallery/dist/js/jquery-11.0.min.js') }}"></script>
        <script src="{{ URL::asset('plugins/tether/js/tether.min.js')}}"></script>
        <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script type="text/javascript">
          $(window).on('load', function() {
            setTimeout(function(){
              $(".loader").fadeOut("slow");
            }, 100);
          });
        </script>
        @yield('js')
    </body>
</html>
