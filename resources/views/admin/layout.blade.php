<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title></title>
    {!! Html::style('css/foundation.css') !!}
    {!! Html::style('css/normalize.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::script('js/vendor/modernizr.js') !!}
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Lora:400,400italic' rel='stylesheet' type='text/css'>
</head>
<body class="admin">
<section class="wrapper-admin">
    <section class="top">
        @yield('top')
    </section>
    <section class="sidebar-left show-for-large-up">
        @include('admin.partials.sidebar-left')
    </section>
    <section class="content">
        <section class="large-12 medium-12 small-12 columns">
            @yield('content')
        </section>
    </section>
</section>

{!! Html::script('js/vendor/jquery.js') !!}
{!! Html::script('js/foundation.min.js') !!}
@yield('scripts')
</body>
</html>


