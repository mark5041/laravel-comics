<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript">
      // Notice how this gets configured before we load Font Awesome
      window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
    <title>Document</title>
</head>
<body>
    @include('guest.partials.header')
    <div class="background">
        
    </div>
    @yield('homapage')

    @include('guest.partials.footer')

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>