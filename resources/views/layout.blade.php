<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>{{ $title }}</title>
    {{ asset('/css/style.css') }}
    {{ asset('/css/foundation.css') }}
    {{ asset('/css/normalize.css') }}
    {{ asset('/js/vendor/modernizr.js') }}

</head>
<body>
@yield('content')

{{ asset('/js/vendor/jquery.js') }}
{{ asset('/js/foundation.js') }}

@yield('scripts')
</body>
</html>


