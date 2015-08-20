<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>{{ $title }}</title>
    {!! Html::style('css/foundation.css') !!}
    {!! Html::style('css/normalize.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::script('js/vendor/modernizr.js') !!}



</head>
<body>
@yield('content')
{!! Html::script('js/vendor/jquery.js') !!}
{!! Html::script('js/foundation.min.js') !!}

@yield('scripts')
</body>
</html>


